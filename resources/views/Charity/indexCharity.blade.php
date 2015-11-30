@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
    <div class="maincontent">
        <div class="wishform">
        Add a Charity
        <form class='charityform' method='POST' action='/add/charity'>
            <input type='hidden' value='{{ csrf_token() }}' name='_token'>
            <fieldset>
              Charity:
              <input
                  type='text'
                  id='name'
                  name='name'
                  value='{{old('name', 'The Human Fund')}}'
              >
              <br><br>Mission Statement:
              <textarea
                  id='mission'
                  name='mission'
                  value='{{old('mission', 'Hoping this will help!')}}'
              ></textarea>
              <br><br>Year Founded:
              <input
                  type='text'
                  id='year_founded'
                  name='year_founded'
                  value='{{ old('year_founded', '1997')}}'
              >
              <br><br>City:
              <input
                  type='text'
                  id='city'
                  name='city'
                  value='{{ old('city', 'New York City')}}'
              >
              <br><br>State:
              <select name="state">
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
                value='{{old('mission', 'Hoping this will help!')}}'
            ></textarea>
            <br><br>Website:
            <input
                type='text'
                id='website'
                name='website'
                size='35'
                value='{{ old('website', 'http://festivusweb.com/festivus-the-human-fund.htm')}}'
            >
            <br><br>URL of Logo:
            <input
                type='text'
                id='logo_or_pic'
                name='logo_or_pic'
                size='35'
                value='{{ old('logo_or_pic', 'http://s3-2.kiva.org/img/w800/456061.jpg')}}'
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
