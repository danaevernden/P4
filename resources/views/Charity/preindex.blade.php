@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">

    <div class ="preWishSelect">
      <div class="preWishTitle">
        What would you like to do?
      </div>
      <a href="/charityfinder" class="button">Find a Charity or Crowdsource</a>
      <br><br><br>
      <a href="/addcharity" class="button">Add a Charity</a>
      <a href="/addcrowdsource" class="button">Add  a CrowdSource</a>

    </div>

  </div>
@stop
