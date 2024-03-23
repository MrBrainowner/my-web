@extends('layouts.account')
@section('form')
    <form action="" method="post" class="form">
        <div class="f-link">
            <h4 class="disabled-link">Sign Up</h4>
            <h4 class="or">or</h4>
            <h4><a href="signin">Sign In</a></h4>
        </div>
        <label for="username">Name</label>
        <input type="text" name="username" id="username" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass" required>
        <button type="submit" id="button">Sign Up</button>
    </form>
@endsection