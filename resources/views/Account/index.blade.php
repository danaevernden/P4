@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <br><br><br><br>
    <strong>First Name:</strong>
      {{$user->first_name}}
    <br>
    <strong>Last Name:</strong>
    {{$user->last_name}}
    <br>
    <strong>City:</strong>
    {{$user->city}}
    <br>
    <strong>State:</strong>
    {{$user->state}}
    <br>
    Change Password
    <br><br>
    <a href='/account/edit/user' class="button">
    Edit Account Information</a>
    <br>
    <h1>My Wishes</h1>

    @foreach($wishes as $wish)
        <strong>Charity:</strong>
        <br>
        <strong>Donation Amount:</strong> {{$wish->donation_amnt_request}}
        <br>
      <strong>Message:</strong> {{$wish->message}}
        <br><br>
        <input type='hidden' name='id' value='{{ $wish->id }}'>
        <a href='/account/edit/{{$wish->id}}' class="button">Edit</a>
        <br><br>
    @endforeach
  </form>

  </div>
@stop
