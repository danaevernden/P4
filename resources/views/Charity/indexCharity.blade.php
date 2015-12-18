@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
    <div class="maincontent">
        <div class="charityform">

          @if(count($errors) > 0)
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul><br>
          @endif

        Add a Charity
        <form method='POST' action='/add/charity'>
            <input type='hidden' value='{{ csrf_token() }}' name='_token'>
            <fieldset>
              Charity:
              <input
                  type='text'
                  id='name'
                  name='name'
                  value='{{old('name', '')}}'
              >
              <br><br>Mission Statement:
              <textarea
                  id='mission'
                  name='mission'
                  value='{{old('mission', '')}}'
              ></textarea>
              <br><br>Year Founded:
              <input
                  type='text'
                  id='year_founded'
                  name='year_founded'
                  value='{{ old('year_founded', '')}}'
              >
              <br><br>City:
              <input
                  type='text'
                  id='city'
                  name='city'
                  value='{{ old('city', '')}}'
              >
              <br><br>State:
              <select name='state' id='state'>
                  @foreach($states as $state)
                      <option value='{{$state}}'>
                        {{$state}}
                      </option>
                  @endforeach
                </select>
            <br><br>Detailed Description:
            <textarea
                id='description'
                name='description'
                value='{{old('mission', '')}}'
            ></textarea>
            <br><br>Website:
            <input
                type='text'
                id='website'
                name='website'
                size='35'
                value='{{ old('website', '')}}'
            >
            <br><br>URL of Logo:
            <input
                type='text'
                id='logo_or_pic'
                name='logo_or_pic'
                size='35'
                value='{{ old('logo_or_pic', '')}}'
            >
            <br>
            <button type="submit" class="button">Submit</button>
         </fieldset>
       </form>
       <br>
       <a href="/charity" class="button">Back</a>
    </div>
  </div>
@stop
