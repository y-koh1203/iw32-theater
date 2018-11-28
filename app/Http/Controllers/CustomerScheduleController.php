<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerScheduleController extends Controller
{
  public function index(Request $r){

    $schedules = DB::table('schedules')
    ->join('movies', 'schedules.movie_no', '=', 'movies.id')
    ->select('schedules.id','movies.movie_name','schedules.screening_date')
    ->get();

    $schedules_decoded = json_decode($schedules,true);

    return view('CustomerSchedule.index')->with([
      'schedules' => $schedules_decoded
    ]);
  }
}
