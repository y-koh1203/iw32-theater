<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
  public function index(){
    //DB接続後従業員情報取得
    //従業員番号(仮)
    $no = array(1,2,3,4,5);
    return view('AdminEmployee.index', compact('no'));
  }
}
