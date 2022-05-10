@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="row">
        dashboard
        {{ Auth::user()->name }}
        {{ Auth::user()->getRoleNames() }}
    </div>

@endsection
