<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerReservationController extends Controller
{
  /*
   *予約座席
   */
  public function index(){
    $a = "お客予約";
    return view('CustomerReservation.index', compact('a'));
  }
  /*
   *予約確認
   */
  public function confirm(Request $request){
    $a = "お客予約確認";
    //選択された座席番号の取得
    $SeatValue = $request->input('SeatValues');
    //取得した値を区切り配列へ格納
    $ArraySeatValue = explode(",", $SeatValue);

    return view('CustomerReservation.confirm', compact('a','ArraySeatValue'));
  }
}
