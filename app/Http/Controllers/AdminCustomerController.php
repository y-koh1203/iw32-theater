<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
  public function index(){
    $a = "管理会員登録";
    return view('AdminCustomer.index', compact('a'));
  }
}
