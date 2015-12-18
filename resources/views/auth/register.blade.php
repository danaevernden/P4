@extends('Layouts.master')

@section('content')
  <div class="maincontent">
    <strong>Already have an account?</strong>
      <a href='/login' class='button'>
      Login here</a>

    <h1>Register</h1>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method='POST' action='/register'>
        {!! csrf_field() !!}
        <div class='form-group'>
            <label for='first_name'>First Name</label>
            <input type='text' name='first_name' id='first_name' value='{{old('first_name', '')}}'>
        </div>
        <div class='form-group'>
            <label for='last_name'>Last Name</label>
            <input type='text' name='last_name' id='last_name' value='{{old('last_name','')}}'>
        </div>
        <div class='form-group'>
            <label for='city'>City</label>
            <input type='text' name='city' id='city' value='{{old('city','')}}'>
        </div>
        <div class='form-group'>
            <label for='state'>State</label>
            <select id='state' name='state'>
            	<option value="Alabama">Alabama</option>
            	<option value="Alaska">Alaska</option>
            	<option value="Arizona">Arizona</option>
            	<option value="Arkansas">Arkansas</option>
            	<option value="California">California</option>
            	<option value="Colorado">Colorado</option>
            	<option value="Connecticut">Connecticut</option>
            	<option value="Delaware">Delaware</option>
            	<option value="District of Columbia">District Of Columbia</option>
            	<option value="Florida">Florida</option>
            	<option value="Georgia">Georgia</option>
            	<option value="Hawaii">Hawaii</option>
            	<option value="Idaho">Idaho</option>
            	<option value="Illinois">Illinois</option>
            	<option value="Indiana">Indiana</option>
            	<option value="Iowa">Iowa</option>
            	<option value="Kansas">Kansas</option>
            	<option value="Kentucky">Kentucky</option>
            	<option value="Louisiana">Louisiana</option>
            	<option value="Maine">Maine</option>
            	<option value="Maryland">Maryland</option>
            	<option value="Massachusetts">Massachusetts</option>
            	<option value="Michigan">Michigan</option>
            	<option value="Minnesota">Minnesota</option>
            	<option value="Mississippi">Mississippi</option>
            	<option value="Missouri">Missouri</option>
            	<option value="Montana">Montana</option>
            	<option value="Nebraska">Nebraska</option>
            	<option value="Nevada">Nevada</option>
            	<option value="New Hampshire">New Hampshire</option>
            	<option value="New Jersey">New Jersey</option>
            	<option value="New Mexico">New Mexico</option>
            	<option value="New York">New York</option>
            	<option value="North Carolina">North Carolina</option>
            	<option value="North Dakota">North Dakota</option>
            	<option value="Ohio">Ohio</option>
            	<option value="Oklahoma">Oklahoma</option>
            	<option value="Oregon">Oregon</option>
            	<option value="Pennsylvania">Pennsylvania</option>
            	<option value="Rhode Island">Rhode Island</option>
            	<option value="South Carolina">South Carolina</option>
            	<option value="South Dakota">South Dakota</option>
            	<option value="Tennessee">Tennessee</option>
            	<option value="Texas">Texas</option>
            	<option value="Utah">Utah</option>
            	<option value="Vermont">Vermont</option>
            	<option value="Virginia">Virginia</option>
            	<option value="Washington">Washington</option>
            	<option value="West Virginia">West Virginia</option>
            	<option value="Wisconsin">Wisconsin</option>
            	<option value="Wyoming">Wyoming</option>
            </select>
        </div>
        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{old('email','')}}'>
        </div>
        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'>
        </div>
        <div class='form-group'>
            <label for='password_confirmation'>Confirm Password</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>
        <button type='submit' class='button'>Register</button>
    </form>
  </div>
@stop
