<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminScheduleController extends Controller
{
  public function index(){
    $a = "管理スケジュール登録";
    return view('AdminSchedule.index', compact('a'));
  }
}
