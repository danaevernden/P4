@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    My Wishes
    <a href="/account/view/WISH#" class="button">View Details</a>
    <a href="/account/edit/WISH#" class="button">Edit</a>
    <a href="/account/delete/WISH#" class="button">Delete</a>
    @foreach($wishes as $wish)
        Charity: {{ $wish->charity->name}}
        <br>
        Donation Amount: {{$wish->donation_amnt_request}}
        <br>
        Message: {{$wish->message}}

    @endforeach


  </div>
@stop
