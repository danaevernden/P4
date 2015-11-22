@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')

    <div class="maincontent">
      <div class ="wishform">
        <div class="preWishTitle2">
          Log a Crowdsource wish
        </div>
      <form method='POST' action='/newwish/crowdsource'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
             CrowdSource/Kickstarter/GoFundMe*:
             <input
               type='text'
               id='Charity'
               name='charity'
               value='{{old('charity', 'The Magic Yarn Project')}}'
             >
             <br><br>Hashtags:
              <input
                type='textarea'
                id='hashtags'
                name='hashtags'
                value='{{old('hashtags', 'children, cancer, wigs')}}'
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
      <br>
      <a href="/newwish" class="button">Back</a>

    </div>
  </div>
@stop
