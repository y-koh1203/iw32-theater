@extends('layouts.app')
@section('content')
<h1>{{ $a }}</h1>
@foreach($ArraySeatValue as $value)
  <p>{{ $value }}</p>
@endforeach
@endsection
