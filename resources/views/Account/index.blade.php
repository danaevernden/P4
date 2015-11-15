@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    Username:
    <br>
    First Name:
    <br>
    Last Name:
    City:
    <br>
    State:
    <br>
    Change Password
    <br>
    Change location
    <br>
    My Wishes
    
    @foreach($wishes as $wish)
      <div>
        <h2>{{$wish->charity}}</h2>

      </div>
    @endforeach


  </div>
@stop
