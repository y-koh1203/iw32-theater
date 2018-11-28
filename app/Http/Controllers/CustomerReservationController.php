<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerReservationController extends Controller
{
  /*
   *予約座席
   *$idはスケジュール
   */
  public function index(Request $r, $id){
    $r->session()->put('schedule_id',$id);
    return view('CustomerReservation.index');
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

    $schedule_id = $r->session()->get('schedule_id');

    return view('CustomerReservation.confirm', compact('a','ArraySeatValue','SeatValue','schedule_id'));
  }

  /*
   *予約確定
   */
  public function insertSchedule(Request $r){
    $seats = $r->post('seats');
    $exploded_seats = explode(',',$seats);

    $schedule_id = $r->session()->get('schedule_id');

    foreach($exploded_seats as $i => $v){
      DB::table('reservations')->insert([
        'schedule_no' => $schedule_id,
        'seat_no' => $i + 1,
        'member_no' => 1,
        'ticket_status' => 1,
        'type_no' => 1,
        'reservation_date' => '2018-12-01', 
        'ticket_date' => '2018-12-01'
      ]);
    }

    $r->session()->flush();

    return view('CustomerReservation.finish');
  }
}
