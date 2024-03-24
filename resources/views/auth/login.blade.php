@extends('layouts.account')
@section('form')
    <form action="{{ route('login') }}" method="POST" class="form">
        @csrf
        <div class="f-link">
            <h4><a href="register">Register</a></h4>
            <h4 class="or">or</h4>
            <h4 class="disabled-link">Log In</h4>
        </div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>
        <button type="submit" id="button">Log In</button>
    </form>
@endsection

    