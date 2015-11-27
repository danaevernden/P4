@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      Edit Charity or Crowdsource
      <form class='charityeditform' method='POST' action='/charity/edit'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
            <input type='hidden' name='id' value='{{ $charity->id }}'>
            Charity:
            <input
              type='text'
              id='name'
              name='name'
              value='{{$charity->name}}'
            >
            @if ($charity->charity_or_crowdsource == 'charity')
              <br><br>Mission Statement:
              <textarea
              id='mission'
              name='mission'
              value='{{$charity->mission}}'>
              {{$charity->mission}}
              </textarea>

                <!--  value='{{old('mission', 'Money for People')}}'
                -->
                <br><br>Year Founded:
                <input
                  type='text'
                  id='year_founded'
                  name='year_founded'
                  value='{{$charity->year_founded}}'
                >
            @endif
            <br><br>City:
            <input
              type='text'
              id='city'
              name='city'
              value='{{$charity->city}}'
            >
            <br><br>State:
            <select name="state">
              <!--fiture out how to select the correct state-->
              	<option value="AL">Alabama</option>
              	<option value="AK">Alaska</option>
              	<option value="AZ">Arizona</option>
              	<option value="AR">Arkansas</option>
              	<option value="CA">California</option>
              	<option value="CO">Colorado</option>
              	<option value="CT">Connecticut</option>
              	<option value="DE">Delaware</option>
              	<option value="DC">District Of Columbia</option>
              	<option value="FL">Florida</option>
              	<option value="GA">Georgia</option>
              	<option value="HI">Hawaii</option>
              	<option value="ID">Idaho</option>
              	<option value="IL">Illinois</option>
              	<option value="IN">Indiana</option>
              	<option value="IA">Iowa</option>
              	<option value="KS">Kansas</option>
              	<option value="KY">Kentucky</option>
              	<option value="LA">Louisiana</option>
              	<option value="ME">Maine</option>
              	<option value="MD">Maryland</option>
              	<option value="MA">Massachusetts</option>
              	<option value="MI">Michigan</option>
              	<option value="MN">Minnesota</option>
              	<option value="MS">Mississippi</option>
              	<option value="MO">Missouri</option>
              	<option value="MT">Montana</option>
              	<option value="NE">Nebraska</option>
              	<option value="NV">Nevada</option>
              	<option value="NH">New Hampshire</option>
              	<option value="NJ">New Jersey</option>
              	<option value="NM">New Mexico</option>
              	<option value="NY">New York</option>
              	<option value="NC">North Carolina</option>
              	<option value="ND">North Dakota</option>
              	<option value="OH">Ohio</option>
              	<option value="OK">Oklahoma</option>
              	<option value="OR">Oregon</option>
              	<option value="PA">Pennsylvania</option>
              	<option value="RI">Rhode Island</option>
              	<option value="SC">South Carolina</option>
              	<option value="SD">South Dakota</option>
              	<option value="TN">Tennessee</option>
              	<option value="TX">Texas</option>
              	<option value="UT">Utah</option>
              	<option value="VT">Vermont</option>
              	<option value="VA">Virginia</option>
              	<option value="WA">Washington</option>
              	<option value="WV">West Virginia</option>
              	<option value="WI">Wisconsin</option>
              	<option value="WY">Wyoming</option>
              </select>
            <br><br>Detailed Description:
            <textarea
            id='description'
            name='description'
            value='{{$charity->description}}'
            >{{$charity->description}}</textarea>

            <br><br>Website:
            <input
              type='text'
              id='website'
              name='website'
              size='35'
              value='{{$charity->website}}'
            >
            <br><br>URL of Logo:
            <input
              type='text'
              id='logo_or_pic'
              name='logo_or_pic'
              size='35'
              value='{{$charity->logo_or_pic}}'
            >
            <br>
            <button type="submit" class="button">Save</button>
         </fieldset>
       </form>
       <br>
       <a href="/charityfinder" class="button">Back</a>
    </div>
  </div>
@stop
