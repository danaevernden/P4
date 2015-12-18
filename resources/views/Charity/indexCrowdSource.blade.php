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
          Add a Crowdsource
          <form method='POST' action='/add/crowdsource'>
              <input type='hidden' value='{{ csrf_token() }}' name='_token'>
              <fieldset>
                  Crowdsource:
                  <input
                      type='text'
                      id ='name'
                      name='name'
                      value='{{old('name', '')}}'
                  ></input>
                  <br><br>City:
                 <input
                     type='text'
                     id='city'
                     name='city'
                     value='{{old('city', '')}}'
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
                     value='{{old('description', '')}}'
                 ></textarea>
                 <br><br>Website:
                 <input
                     type='text'
                     id='website'
                     name='website'
                     size='35'
                     value='{{old('website', '')}}'
                 ></input>
                 <br><br>URL of Picture:
                 <input
                     type='text'
                     id='logo_or_pic'
                     name='logo_or_pic'
                     size='35'
                     value='{{old('logo_or_pic', '')}}'
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
