@extends('layouts.app')
@section('head')
<link href="{{ asset('css/CustomerReservation.css') }}" rel="stylesheet">
@endsection
@section('content')
<h1>{{$screen_name}}</h1>
<form action="{{ url('/customer/reservation/confirm') }}" method="POST">
  {{ csrf_field() }}
<div>
  @foreach($seats as $seat)
    <!-- 
      array_searchで検索した時に、配列の0番目の要素がヒットすると 
      戻り値が0でfalseと判断されてしまう。それを回避するためにこのifの評価式になっている。
      気持ち悪いのでなんとかする ()
    -->
    @if(array_search($seat->id,$reserved) === false)
      <div class="seat-box {{$seat->id}}">
        {{$seat->seat_name}}
      </div>
    @else
      <div class="seat-box-disable">
        {{$seat->seat_name}}
      </div>
    @endif
  @endforeach
</div>
<p id="text"></p>
<input id="SeatValue" name="SeatValues" type="hidden" value="">
<button type="submit" name="add">
  追加
</button>
</form>
<script>
    //DOM読み込み完了時に実行
    document.addEventListener('DOMContentLoaded',function(){
        //class、aの要素をelemに取得
        const elem = document.getElementsByClassName('seat-box');
        //選択済みの座席番号を格納する配列
        let selected_seat = [];
        //直接配列を書き換えないため、変更後の状態を保持する配列
        let new_ss = [];
        //HTMLElementにforeachを使用できないため、この形でforeachを呼び出し
        Array.prototype.forEach.call(elem,function(v){
            //全てのaクラス要素にclickイベントを登録
            v.addEventListener('click',function(){
                //クラスを全取得し、スペースでsplit、その2番目のクラス名を取得
                const res = v.className.split(' ')[1];
                //選択状態の切り替え
                v.classList.toggle('selected');

                //選択状態の判別
                if(v.className.split(' ').indexOf('selected') >= 0){
                    //selectedがなければ、選択された座席番号をリストに追加
                    selected_seat.push(res);
                }else{
                    //配列内にselctedがあれば、座席番号の一覧からその値を削除する
                    if(selected_seat.indexOf(res) >= 0){
                        //削除処理、new_ssに更新後の配列を返す
                        new_ss = selected_seat.filter(function(k){
                            return k != res;
                        });
                        //選択状態の更新
                        selected_seat = new_ss;
                    }
                }

                console.log(selected_seat);
                //選択した座席配列をvalueに格納
                document.getElementById( "SeatValue" ).value = selected_seat;
            });
        });
    });
</script>
@endsection
