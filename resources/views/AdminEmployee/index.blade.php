@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <table>
                    <thead>
                      <th>
                        <td>No</td><!-- 仮thead -->
                      </th>
                    </thead>
                    <tbody>
                    @foreach($no as $key => $value)
                      <tr>
                        <td>{{ $value }}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
