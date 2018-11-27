<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerScheduleController extends Controller
{
  public function index(){
    $a = "お客スケジュール";
    //仮スケジュール番号
    $movies = array('1','2','3','4','5');
    return view('CustomerSchedule.index', compact('a','movies'));
  }
}
