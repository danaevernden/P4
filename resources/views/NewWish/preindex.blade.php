@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">

    <div class ="preWishSelect">
      <div class="preWishTitle">
        What kind of wish would you like to log?
      </div>
      <a href="/newwish/donation" class="button">A Donation to a Charity</a>
      <a href="/newwish/crowdsource" class="button">A Donation to a CrowdSource</a>
      <a href="/newwish/material" class="button">A Material Present</a>
    </div>

  </div>
@stop
