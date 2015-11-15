@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      <div class="preWishTitle2">
        Log a material wish
      </div>
      <form method='POST' action='/newwish/material'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
             <fieldset>
               Present:
               <input
                 type='text'
                 id='Charity'
                 name='charity'
                 value='{{old('charity', 'Selfie Stick')}}'
               >
               <br><br>Hashtags:
                <input
                  type='text'
                  id='hashtags'
                  name='hashtags'
                  value='{{old('hashtags', 'selfie stick, narcissism, love')}}'
                >
               <br><br>Message:
               <input
                 type='text'
                 name='message'
                 class='bigtextbox'
                 value='{{old('message', 'do not forget to buy this for me!!!!')}}'
               >
               <br><br>Wrapping Paper:
               <input type="radio"
               id="wrapping_paper_color"
               name="wrapping_paper_color"
               value="1"
               checked><img src=/images/gift1.png></img>

               <input type="radio"
               id="wrapping_paper_color"
               name="wrapping_paper_color"
               value="2"><img src=/images/gift4.png></img>

               <input type="radio"
               id="wrapping_paper_color"
               name="wrapping_paper_color"
               value="3"><img src=/images/gift3.png></img>

               <input type="radio"
               id="wrapping_paper_color"
               name="wrapping_paper_color"
               value="4"><img src=/images/gift6.png></img>
               <br><br>
              <button type="submit" class="button">Submit</button>
        </fieldset>
      </form>
      <br>
      <a href="/newwish" class="button">Back</a>
  </div>
@stop
