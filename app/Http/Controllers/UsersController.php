<?php

namespace App\Http\Controllers;

use App\Department;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=Auth::User()->id;
        $request=Application::where('user_id','=',$id)->where(function ($q){
            $q->where('status','=',0);
        })->get();

        $allrequest=Application::where('user_id','=',$id)->get();

        $reasons=Application::where('user_id','=',$id)->where(function ($q){
            $q->where('status','=',0);
        })->orderBy('created_at','DESC')->paginate(5);

        $breakdown=Application::where('user_id','=',$id)->select('leave_id', DB::raw('count(*) as total'))
            ->groupBy('leave_id')
            ->get();


        return view('user',compact('request','reasons','allrequest','breakdown'));
    }


    public function api()
    {
        $id=Auth::user()->id;
        $applications=Application::where('user_id','=',$id)->where(function ($q){
            $dep=Auth::user()->department_id;
            $q->where('department_id','=',$dep);
        })->get();

        $dep=Auth::user()->department_id;
        $others=Application::where('department_id','=',$dep)->get();
        $myapplications=count($applications);
        $otherapplications=count($others)-count($applications);

        return response()->json(['mine'=>$myapplications,'others'=>$otherapplications],200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        $departments=Department::all();
        $users=User::orderBy('created_at','DESC')->paginate(10);
        return view('hr.createusers',compact('users','roles','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (User::where('email','=',$request->email)->exists())
        {
            Session::flash('message', 'Email Exists');
            return redirect()->back();
        }
        else
        {
            $user = new User();
            $user->username = $request->username;
            $user->f_name = $request->first_name;
            $user->l_name = $request->last_name;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->department_id = $request->department_id;
            $user->tel_no = $request->tel_no;
            $user->password = bcrypt($request->password);
            $user->save();
            Session::flash('email', 'User Created Successfully');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user= User::find($id);
        $user->delete();
        Session::flash('delete','User Deleted Successfully');
        return redirect()->back();
    }
}
