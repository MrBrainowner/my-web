@extends('layouts.template')
@section('title', 'Account |')
@section('content')
    <div class="content-container form-container">
        <div class="form-div">
            @yield('form')
            <div class="side-content"></div>
        </div>
    </div>
@endsection