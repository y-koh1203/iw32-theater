<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEmployeeController extends Controller
{
  public function index(){
    //DB接続後従業員情報取得
    //従業員番号(仮)
    $a = "管理従業員登録";
    return view('AdminEmployee.index', compact('a'));
  }
}
