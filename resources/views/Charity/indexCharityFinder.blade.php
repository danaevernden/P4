@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      <div class="preWishTitle2">
        Search for a Charity or Crowdsource
      </div>
      <form method='POST' action='/charityfinder'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
             <label for='numpara'>Search:</label>
             <input type="text" id='numpara' name="numpara">
             Type:
             <select name="numWords">
               <option value="city">city</option>
               <option value="state">state</option>
               <option value="hashtag">hashtag</option>
             </select>
             Charity or Crowdsource:
             <select name="numWords">
               <option value="charity">charity</option>
               <option value="crowdsource">crowdsource</option>
             </select>
             <br><br>
             <button type="submit" class="button">Submit</button>
          </fieldset>
          </form>
          <br>
          <a href="/charity" class="button">Back</a>    </div>
      </div>
  </div>
@stop
