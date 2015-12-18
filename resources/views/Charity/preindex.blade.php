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
          <img src="/images/imgres.jpg" class="CharityFinderimg"/><br>
          <a href="/charityfinder" class="button">Browse Charities and Crowdsources</a>
          <br><br><br>
          <img src="/images/crowd.jpg" class="CharityFinderimg"/><br>
          <a href="/add/charity" class="button">Add a Charity</a>
          <a href="/add/crowdsource" class="button">Add  a CrowdSource</a>
      </div>
  </div>
@stop
