<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerReservationController extends Controller
{
  public function index(){
    $a = "お客予約";
    //仮会員no
    $
    //仮スケジュールno
    $
    return view('CustomerReservation.index', compact('a'));
  }
  public function confirm(Request $request){
    $a = "お客予約確認";
    $SeatValue = $request->input('SeatValues');
    $ArraySeatValue = explode(",", $SeatValue);

    return view('CustomerReservation.confirm', compact('a','ArraySeatValue'));
  }
}
