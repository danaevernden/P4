@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <form method='POST' action='/charityfinder'>
        <input type='hidden' value='{{ csrf_token() }}' name='_token'>
        <fieldset>
           <label for='numpara'>Search:</label>
           <input type="text" id='numpara' name="numpara">
           Type:
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
