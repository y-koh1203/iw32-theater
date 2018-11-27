@extends('layouts.app')
@section('content')
  {{ $a }}
  @foreach($movies as $value)
    <a href="/customer/reservation/{{$value}}">{{ $value }}</a>
  @endforeach
@endsection
