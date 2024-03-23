@extends('layouts.account')
@section('form')
    <form action="" method="post" class="form">
        <div class="f-link">
            <h3><a href="">Sign Up</a></h3>
            <h3 class="or">or</h3>
            <h3><a href="">Sign In</a></h3>
        </div>
        <label for="username">Name</label>
        <input type="text" name="username" id="username">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="pass">Password</label>
        <input type="password" name="pass" id="pass">
        <label for="rpass">Repeat Password</label>
        <input type="password" name="rpass" id="rpass">
        <button type="button" id="button">Sign In</button>
    </form>
@endsection

    