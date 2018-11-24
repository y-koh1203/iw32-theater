<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffScheduleController extends Controller
{
  public function index(){
    $a = "スタッフスケジュール登録";
    return view('StaffSchedule.index', compact('a'));
  }
}
