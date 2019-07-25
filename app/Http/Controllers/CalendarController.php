<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class CalendarController extends Controller
{

    public function index()
    {
        $events = [];

        $data = Application::where('status','=',1)->get();

        if($data->count()){

            foreach ($data as $key => $value)
            {
                $events[] = Calendar::event(
                    $value->User['f_name'].'  '.$value->User['l_name'].' '.$value->period.' '.'Days',
                    true,

                    new \DateTime($value->from),
                    new \DateTime($value->to.' +1 day'),

                    null,

                    ['color' => '#167229', 'url' => 'timeline/'.$value->user_id,]
                );
            }

        }

        $calendar = Calendar::addEvents($events);

        return view('hr.calendar', compact('calendar'));

    }


    public  function timeline($id)
    {
        $applications=Application::where('user_id','=',$id)->orderBy('from','ASC')->get();
        return view('timeline',compact('applications'));
    }
}
