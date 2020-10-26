@extends('loginlayout')
@section('title','User Page')
@section('content')
<div class="col-sm-6 form">
    <h1>User Login</h1>

    <form action="userloginchk" method="post">
        @csrf;

        <div class="form-group">
          <label>Email address</label>
          <input type="text" class="form-control" name="email" placeholder="Enter email">

        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
<style>
    .form
    {
        margin-left: 40px;
        border: 1px;
        width: 400px;
    }
</style>
@stop
