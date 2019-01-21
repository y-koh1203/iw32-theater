<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Polyfill\Mbstring\Mbstring;

class CustomerReservationController extends Controller
{
  /*
   *予約座席
   *$idはスケジュール
   */
  public function index(Request $r, $id){
    $r->session()->put('schedule_id',$id);
    //予約から、screen_noを取得
    $screen_id = DB::table('schedules')->where('id',$id)->value('screen_no');
    
    //取得したscreen_noを元に、座席一覧を取得
    $seats = DB::table('seats')->get()->where('screen_id',$screen_id);

    //すでに予約されている座席を特定
    $ArrayReservedSeats = [];
    $reserved_seats = DB::table('reservation_seat')->get()->where('schedule_id',$id);
    foreach($reserved_seats as $rs){
      $ArrayReservedSeats[] = $rs->seat_id;

    }
   
    return view('CustomerReservation.index')->with([
      'seats' => $seats,
      'reserved' => $ArrayReservedSeats
    ]);
  }

  /*
   *予約確認
   */
  public function confirm(Request $r){
    $a = "お客予約確認";
    //選択された座席番号の取得
    $SeatValue = $r->input('SeatValues');
    //取得した値を区切り配列へ格納
    $ArraySeatValue = explode(",", $SeatValue);
    $SeatNames = [];

    foreach($ArraySeatValue as $sv){
      $SeatNames[] = DB::table('seats')->where('id',$sv)->value('seat_name');
    }

    $schedule_id = $r->session()->get('schedule_id');

    return view('CustomerReservation.confirm', compact('a','SeatNames','SeatValue','schedule_id'));
  }

  /*
   *予約確定
   */
  public function insertSchedule(Request $r){
    $seats = $r->post('seats');
    $ExplodedSeats = explode(',',$seats);

    $schedule_id = $r->session()->get('schedule_id');

    foreach($ExplodedSeats as $i => $v){
      DB::table('reservations')->insert([
        'schedule_no' => $schedule_id,
        'seat_no' => $v,
        'member_no' => 1,
        'ticket_status' => 1,
        'type_no' => 1,
        'reservation_date' => '2018-12-01', 
        'ticket_date' => '2018-12-01'
      ]);

      DB::table('reservation_seat')->insert([
        'seat_id' => $v,
        'schedule_id' => $schedule_id
      ]);
    }

    $r->session()->flush();

    return view('CustomerReservation.finish');
  }
}
