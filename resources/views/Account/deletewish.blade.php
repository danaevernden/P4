@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <h1>Delete Wish</h1>
        <form method='POST' action='/account/delete/{{$wish->id}}'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          Are you sure you want to delete your wish to  <strong>{{$wish->charity->name}}</strong>
          for <strong>${{$wish->donation_amnt_request}}</strong>?
          <br><br>
          <input type='hidden' name='id' value='{{ $wish->id }}'>
          <button type="save" class="button">Yes</button>
          <a href='/account' class="button">No</a>
        </form>
  <!--add email functionality here-->

  </div>
@stop
