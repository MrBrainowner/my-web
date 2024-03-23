@extends('layouts.account')
@section('form')
    <form action="{{ route('signin') }}" method="POST" class="form">
        @csrf
        <div class="f-link">
            <h4><a href="signup">Sign Up</a></h4>
            <h4 class="or">or</h4>
            <h4 class="disabled-link">Sign In</h4>
        </div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>
        <button type="submit" id="button">Sign Up</button>
    </form>
@endsection

    