@extends('dashboard.main')

@section('title', 'Dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h2>Selamat Datang , {{auth() -> user()->username}}</h2>
    </div>
@endsection