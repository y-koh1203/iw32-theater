@extends('layouts.app')
@section('content')
  {{ $a }}
  @foreach($movies as $value)
    <p>{{ $value }}</p>
  @endforeach
@endsection
