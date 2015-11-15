@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
      Add a Crowdsource
      <form method='POST' action='/addcharity'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
             Crowdsource:
             <input
               type='title'
               id='title'
               name='title'
               value='{{old('name', 'Children Lost Both Parents in Wreck')}}'
             >
             <br><br>City:
             <input
               type='title'
               id='title'
               name='title'
               value='{{old('city', 'Jackson')}}'
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
               type='title'
               id='title'
               name='title'
               value='{{old('description', 'Raising funds for four children who
               became orphans on Halloween - A Georgia State Troopers gracefully
               handled their evening with candy and movies and has set up a
               trust fund for the children')}}'
             >
             <br><br>Website:
             <input
               type='title'
               id='title'
               name='title'
               value='{{old('website', 'https://www.gofundme.com/WreckOnHalloween')}}'
             >
             <br><br>URL of Picture:
             <input
               type='title'
               id='title'
               name='title'
               value='{{old('logo_or_pic', 'https://2dbdd5116ffa30a49aa8-c03f075f8191fb4e60e74b907071aee8.ssl.cf1.rackcdn.com/6621153_1446519689.6133.jpg')}}'
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
