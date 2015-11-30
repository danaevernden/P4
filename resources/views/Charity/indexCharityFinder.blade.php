@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
          <div class="CharityFinder">
            Search for a Charity or Crowdsource
          </div>
          <form method='POST' action='/charityfinder'>
              <input type='hidden' value='{{ csrf_token() }}' name='_token'>
              <fieldset>
                 <label for='numpara'>Search:</label>
                 <input type="text" id='numpara' name="numpara">
                 Charity or Crowdsource:
                 <select name="charity_or_crowdsource">
                    <option value="charity">charity</option>
                    <option value="crowdsource">crowdsource</option>
                 </select>
                 <br><br>
                 <button type="submit" class="button">Submit</button>
              </fieldset>
          </form>
          <br>
          <a href="/charity" class="button">Back</a>
    </div>
        <h1>All Charities and CrowdSources</h1>
              @foreach($charities as $charity)
                  <h2>{{ $charity->name }}</h2>
                  <img class='CharityFinderimg' src='{{ $charity->logo_or_pic }}'>
               @if ($charity->mission !== 0)
                  <br><strong>Mission:</strong>
                  {{ $charity->mission}}
               @endif

               @if ($charity->city !== 0)
                  <br><strong>Location:</strong>
                  {{ $charity->city}}, {{ $charity->state}}
               @endif

               @if ($charity->year_founded !== 0)
                  <br><strong>Year Founded:</strong>
                  {{ $charity->year_founded}}
              @endif

               @if ($charity->description !== '')
                  <br><strong>Description:</strong>
                  {{ $charity->description}}
               @endif
               @if ($charity->website !=='')
                  <br><a href={{$charity->website}} class="linkInBody"><strong>Website</strong></a>
              @endif
               <br><br>
               <input type='hidden' name='id' value='{{ $charity->id }}'>
               <a href='/charity/edit/{{$charity->id}}' class="button">Edit</a>
               <a href='/charity/view/{{$charity->id}}' class="button">View</a>
          @endforeach
      </div>
  </div>
@stop
