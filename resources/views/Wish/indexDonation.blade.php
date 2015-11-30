@extends('Layouts.master')
    @section('content')

    <div class="maincontent">
        <div class="wishform">
            <div class="preWishTitle2">
                Log a Donation
            </div>
        <form method='POST' action='/newwish/donation'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
            <div class='form-group'>
                *Charity:
                <select>
                    @foreach($charities as $charity)
                        <option name='charity_id'
                            id='charity_id'
                            value='{{$charity->id}}'>
                            {{$charity->name}}
                    @endforeach
                        </option>
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
