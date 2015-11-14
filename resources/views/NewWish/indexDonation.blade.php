@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      <div class="preWishTitle2">
        Log a Donation
      </div>
      <form method='POST' action='/newwish/donation'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
             <label for='numpara'>Charity</label>
             <input type="text" id='numpara' name="numpara">
             <br>
             City
             <!--validate on entry with a list of cities-->
             <input type="text" id='numpara' name="numpara">
             <br>
             State
             <!--either make a dropdown or validate on entry?-->
             <input type="text" id='numpara' name="numpara">
             <br>
             Hashtags
             <input type="text" id='numpara' name="numpara">
             <Br>
             Donation Amount Request
             <input type="text" id='numpara' name="numpara">
            <br>
             Message
             <input type="text" id='numpara' name="numpara">
             <br>
             Hashtag
             <input type="text" id='numpara' name="numpara">


            <button type="submit" class="button">Generate</button>
        </fieldset>
        </form>
      <a href="/newwish" class="button">Back</a>
  </div>
@stop
