@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <br><br><br><br>
    <h1>Delete Wish</h1>

        <strong>Charity:</strong> {{$wish->charity->name}}
        <br>
        <strong>Donation Amount:</strong> {{$wish->donation_amnt_request}}
        <br>
      <strong>Message:</strong> {{$wish->message}}
        <br><br><br>
        <form method='POST' action='/account/delete/{{$wish->id}}'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>

          Are you sure you want to delete this wish?
          <br><br>
          <input type='hidden' name='id' value='{{ $wish->id }}'>
          <button type="save" class="button">Yes</button>
          <a href='/account' class="button">No</a>
        </form>
  <!--add email functionality here-->

  </div>
@stop
