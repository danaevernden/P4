@extends('Layouts.master')

@section('content')
    <div class="maincontent">
        <div class ="preWishSelect">
            <div class="preWishTitle">
                What kind of wish would you like to log?
            </div>
            <img src="/images/givingback.jpg" class="CharityFinderimg"/><br>
            <a href="/newwish/donation" class="button">A Donation to a Charity</a>
            <a href="/newwish/crowdsource" class="button">A Donation to a CrowdSource</a>
            <br><br>
            <img src="/images/material.png" class="CharityFinderimg"/><br>
            <a href="/newwish/material" class="button">A Material Present</a>
        </div>
    </div>
@stop
