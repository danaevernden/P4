@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="maincontent">
      <form method='POST' action='/newdonation'>
          <input type='hidden' value='{{ csrf_token() }}' name='_token'>
          <fieldset>
             <label for='numpara'>Charity</label>
             <input type="text" id='numpara' name="numpara">
             <br>
             City   
             <!--validate on entry with a list of cities-->
             <input type="text" id='numpara' name="numpara">
             <br>
             State
             <!--either make a dropdown or validate on entry?-->
             <input type="text" id='numpara' name="numpara">
             <br>
             Hashtags
             <input type="text" id='numpara' name="numpara">
             <Br>
             Amount
             <input type="text" id='numpara' name="numpara">
            <br>
             On behalf of/In memory of
             <input type="text" id='numpara' name="numpara">
             <br>
             Messaage
             <input type="text" id='numpara' name="numpara">

             <select name="numWords">
               <option value="city">city</option>
               <option value="state">state</option>
               <option value="hashtag">hashtag</option>
             </select>

       <button type="submit" class="btn btn-primary">Generate</button>
     </fieldset>
      </form>

  </div>
@stop
