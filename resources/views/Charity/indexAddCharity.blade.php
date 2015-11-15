@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      Add a Charity
      <form method='POST' action='/charityfinder'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
            Charity:
            <input
              type='text'
              id='title'
              name='title'
              value='{{old('name', 'The Human Fund')}}'
            >
            <br><br>Mission Statement:
            <input
              type='text'
              id='mission'
              name='mission'
              value='{{old('mission', 'Money for People')}}'
            >
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
            <input
              type='text'
              id='description'
              name='description'
              value='{{ old('description', 'The Human Fund is a fake charity
              used by George Costanza in the sitcom Seinfeld during the episode
              The Strike. After gettin a similar gift from his friend Tim Whatley,
              George gives out cards to his co-workers stating that a donation
               has been made to a charity called The Human Fund with the slogan
               Money for People.')}}'
            >
            <br><br>Website:
            <input
              type='text'
              id='website'
              name='website'
              value='{{ old('website', 'http://festivusweb.com/festivus-the-human-fund.htm')}}'
            >
            <br><br>URL of Logo:
            <input
              type='text'
              id='logo_or_pic'
              name='logo_or_pic'
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
