@extends('Layouts.master')

@section('content')
  <div class="maincontent">

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
         <strong>Total Donation Dollars Requested:</strong>
         ${{$wishsum}}<br>


        @if (isset($wishgift))
            @foreach($wishes as $wish)
              {{$wish->city}}, {{$wish->state}}<br>
            @endforeach
        <strong>Presents:</strong>
            <img src=/images/gift{{$wishgift}}.png></img>
        @endif

      <br><br>
      <a href='/charityfinder' class="button">Back</a>

  </div>

@stop
