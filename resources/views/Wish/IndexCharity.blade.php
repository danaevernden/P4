@extends('Layouts.master')
    @section('content')

    <div class="maincontent">
        <div class="wishform">
          @if(count($errors) > 0)
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul><br>
          @endif
          
            <div class="preWishTitle2">
                Log a Donation
            </div>
        <form method='POST' action='/newwish/charity'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
            <div class='form-group'>
                *Charity:
                <select name='charity' id='charity'>
                    @foreach($charities as $charity)
                        <option value='{{$charity->id}}'>
                            {{$charity->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <Br><br>Donation Amount Request:
            <input
                type='integer'
                id='donation_amnt_request'
                name='donation_amnt_request'
                value='{{old('donation_amnt_request', '')}}'
            >
            <br><br>Message:
            <textarea
                id='message'
                name='message'
                value='{{old('message', '')}}'
            ></textarea>
            <br><br>Wrapping Paper:
            <input type="radio"
                id="wrapping_paper_color"
                name="wrapping_paper_color"
                value="1"
                checked
            ><img src=/images/gift1.png></img>
            <input type="radio"
                id="wrapping_paper_color"
                name="wrapping_paper_color"
                value="2"
            ><img src=/images/gift4.png></img>
            <input type="radio"
                id="wrapping_paper_color"
                name="wrapping_paper_color"
                value="3"
            ><img src=/images/gift3.png></img>
            <input type="radio"
                id="wrapping_paper_color"
                name="wrapping_paper_color"
                value="4"
            ><img src=/images/gift6.png></img>
            <br><br>
            <button type="submit" class="button">Submit</button>
        </fieldset>
    </form>
    <br><br>
    <a href="/newwish" class="button">Back</a>
  </div>
@stop
