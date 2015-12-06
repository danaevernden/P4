@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
    <div class="maincontent">
      <div class="charityform">
          Add a Crowdsource
          <form method='POST' action='/add/crowdsource'>
              <input type='hidden' value='{{ csrf_token() }}' name='_token'>
              <fieldset>
                  Crowdsource:
                  <input
                      type='text'
                      id ='name'
                      name='name'
                      value='{{old('name', 'Children Lost Both Parents in Wreck')}}'
                  ></input>
                  <br><br>City:
                 <input
                     type='text'
                     id='city'
                     name='city'
                     value='{{old('city', 'Jackson')}}'
                 ></input>
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
                     value='{{old('description', 'Hoping this will help!')}}'
                 ></textarea>
                 <br><br>Website:
                 <input
                     type='text'
                     id='website'
                     name='website'
                     size='35'
                     value='{{old('website', 'https://www.gofundme.com/WreckOnHalloween')}}'
                 ></input>
                 <br><br>URL of Picture:
                 <input
                     type='text'
                     id='logo_or_pic'
                     name='logo_or_pic'
                     size='35'
                     value='{{old('logo_or_pic', 'https://2dbdd5116ffa30a49aa8-c03f075f8191fb4e60e74b907071aee8.ssl.cf1.rackcdn.com/6621153_1446519689.6133.jpg')}}'
                 ></input>
                 <br>
                 <button type="submit" class="button">Submit</button>
           </fieldset>
        </form>
        <br>
        <a href="/charity" class="button">Back</a>
      </div>
  </div>
@stop
