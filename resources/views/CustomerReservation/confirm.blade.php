@extends('layouts.app')
@section('content')
<h1>{{ $a }}</h1>
<form action="/customer/reservation/complete" method="post">
{{ csrf_field() }}
@foreach($ArraySeatValue as $value)
  <p>{{ $value }}</p>
@endforeach
<input type="hidden" name="seats" value="{{ $SeatValue }}">
<button type="submit">確定する</button>
</form>

<a href="/customer/reservation/{{ $schedule_id }}">選択画面へ</a>
@endsection
