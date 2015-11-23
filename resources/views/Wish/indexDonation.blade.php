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
            Charity:
            <select
              id='Charity'
              name='charity'>
            @foreach($charities_for_dropdown as $charity_id => $charity_name)
            <option value='{{charity_id}}' {{$charity_name}} </option>
            @endforeach
            <!--value='{{old('charity', 'The Human Fund')}}'
            -->
          </select>
            <br><br>Hashtags:
             <input
               type='text'
               id='hashtags'
               name='hashtags'
               value='{{old('hashtags', 'Money for People, Seinfeld, The Strike, Festivus')}}'
             >
             <Br><br>Donation Amount Request:
               <input
                 type='integer'
                 id='donation_amnt_request'
                 name='donation_amnt_request'
                 value='{{old('donation_amnt_request', '30')}}'
               >
            <br><br>Message:
            <textarea
            id='message'
            name='message'
            value='{{old('message', 'Hoping this will help!')}}'
          ></textarea>
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
        <br><br>
      <a href="/newwish" class="button">Back</a>
  </div>
@stop
