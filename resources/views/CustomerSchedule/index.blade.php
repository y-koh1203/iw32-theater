@extends('layouts.app')
@section('content')
  @foreach($schedules as $v)
    <div>
      <a href="/customer/reservation/{{$v['id']}}">{{ $v['movie_name']}}</a>：{{$v['screening_date']}}~
    </div>
    <hr>
  @endforeach
@endsection
