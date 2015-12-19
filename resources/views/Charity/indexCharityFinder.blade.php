@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">
    <div class="wishform">
          <div class="CharityFinder">
            <h1>All Charities and CrowdSources</h1>
              @foreach($charities as $charity)
                  <h2>{{ $charity->name }}</h2>
                  <img class='CharityFinderimg' alt="charity" src='{{ $charity->logo_or_pic }}'>
                  @if ($charity->mission !== "")
                      <br><strong>Mission:</strong>
                      {{ $charity->mission}}
                  @endif

                   @if ($charity->city !== "")
                      <br><strong>Location:</strong>
                      {{ $charity->city}}, {{ $charity->state}}
                   @endif

                   @if (!empty($charity->year_founded))
                      <br><strong>Year Founded:</strong>
                      {{ $charity->year_founded}}
                  @endif

                   @if ($charity->description !== "")
                      <br><strong>Description:</strong>
                      {{ $charity->description}}
                   @endif
                   @if ($charity->website !=="")
                      <br><a href={{$charity->website}} class="linkInBody" target="_blank"><strong style='color:maroon;'>Website</strong></a>
                  @endif
                   <br><br>
                   <input type='hidden' name='id' value='{{ $charity->id }}'>
                   <a href='/charity/edit/{{$charity->id}}' class="button">Edit</a>
                   <a href='/charity/view/{{$charity->id}}' class="button">View</a>
          @endforeach
        </div>
      </div>
  </div>
@stop
