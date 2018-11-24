<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
  public function index(){
    $a = "管理映画登録";
    return view('AdminMovie.index', compact('a'));
  }
}
