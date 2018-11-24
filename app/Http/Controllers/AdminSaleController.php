<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSaleController extends Controller
{
  public function index(){
    $a = "管理売上一覧";
    return view('AdminSale.index', compact('a'));
  }
}
