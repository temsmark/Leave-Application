<?php

namespace App\Http\Controllers;

use App\Application;
use App\Http\Resources\ApplicationResource;
use App\Leave;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *w
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function api()
    {
        $applications=Application::select('from', DB::raw('count(*) as total'))
            ->groupBy('from')->orderBy('from','DESC')
            ->get();
        return response()->json($applications,200);

    }


    public function api_today()
    {
        $applications=Application::select( 'from', DB::raw('count(*) as total'))
            ->groupBy('from')->where('from','=',date('y-m-d'))->where(function ($q){
                $q->where('status','=',1);
            })->orderBy('from','DESC')
            ->get();
        return response()->json($applications,200);

    }

    public function api_pending()
    {
        $applications=Application::select( 'from', DB::raw('count(*) as total'))
            ->groupBy('from')->where('status','=',0)->orderBy('from','DESC')
            ->get();
        return response()->json($applications,200);

    }
    public function pending()
    {
        $applications=Application::where('status','=',0)->orderBy('created_at','DESC')
            ->get();
        ;
        return  view('hr.pending',compact('applications'));


    }

    public function api_department()
    {
        $applications=Application::select( 'to', DB::raw('count(*) as total'))
            ->groupBy('to')->where('status','=',1)->orderBy('to','DESC')
            ->get();
        return response()->json($applications,200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=Auth::User()->id;
        $user=Application::where('user_id','=',$id)->get();
        $users=Application::where('user_id','=',$id)->orderBy('created_at','DESC')->paginate(10);

        $annual=Application::where('user_id','=',$id)->where(function ($q){
            $q ->where('leave_id','=',5);
        })->get();
        $leaves=Leave::all();
        return view('apply',compact('user','annual','users','leaves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $to = \Carbon\Carbon::createFromFormat('Y-m-d', $request->to);

        $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from);

        $diff_in_days = $to->diffInDays($from);

        $leave=new Application();
        $leave->user_id=Auth::user()->id;
        $leave->department_id=Auth::user()->department_id;
        $leave->leave_id=$request->leave_id;
        $leave->reason=$request->reason;
        $leave->period=$diff_in_days;
        $leave->status=0;
        $leave->from=$request->from;
        $leave->to=$request->to;
        $leave->save();


        Session::flash('message', 'Leave Registered');
        return redirect()->back();

    }

    public  function approve($id)
    {
        Application::find($id)->update(['status'=>1]);
        Session::flash('message', 'Leave Approved');
        return redirect()->back();
    }

    public  function decline($id)
    {
        Application::find($id)->update(['status'=>2]);
        Session::flash('message2', 'Leave Request Rejected');
        return redirect()->back();
    }


    public function reject()
    {
        $applications=Application::where('status','=',2)->orderBy('created_at','DESC')
            ->get();
        ;
        return  view('hr.reject',compact('applications'));


    }
}
