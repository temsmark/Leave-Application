<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(App\Application::class, function (Faker $faker) {
    foreach(range(1, 120) as $index) {
        $date = Carbon::create(2018, 12, 28, 0, 0, 0);
$from=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $date->addRealDays(rand(1,5)));
$to=\Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $date->addRealWeeks(rand(1, 3)));

        return [
            'reason' => $faker->sentence(10),
            'period'=>$to->diffInDays($from),
            'department_id'=>rand(1,5),
            'leave_id'=>rand(1,5),
//                date_diff($date->format('Y-m-d H:i:s')-($date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'))),
            'user_id'=>rand(1,50),
            'status'=>rand(2,0),
            'from'  =>   $from,
            'to'  =>$to,
        ];
    }
});
