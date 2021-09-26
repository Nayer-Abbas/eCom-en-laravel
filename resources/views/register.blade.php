@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-offset-4">
            <form action="register" method="POST">
            @csrf
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Register</button>
            </form>
        </div>
    </div>
</div>

@endsection