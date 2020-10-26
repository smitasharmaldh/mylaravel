@extends('layout')
@section('title','User Page')
@section('content')
@if (Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hey!</strong> You are registered successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

@endif
<h1>List Page</h1>
@stop
