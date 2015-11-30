@extends('Layouts.master')

@section('content')
    <div class="maincontent">
    <br><br><br><br>
    <h1>Delete Charity or Crowdsource</h1>
        <strong>Charity:</strong> {{$charity->name}}
        @if ($charity->charity_or_crowdsource == 'charity')
            <br><strong>Mission Statement:</strong> {{$charity->mission}}
            <br><strong>Year Founded:</strong> {{$charity->year_founded}}
        @endif
        <br>
        <strong>City:</strong> {{$charity->city}}
        <br>
        <strong>State:</strong> {{$charity->state}}
        <br>
        <strong>Detailed Description:</strong> {{$charity->description}}
        <br>
        <strong>Website:</strong> {{$charity->website}}
        <br>
        <strong>URL of Logo:</strong> {{$charity->logo_or_pic}}
        <br><br><br>
        <form method='POST' action='/charity/delete/{{$charity->id}}'>
            <input type='hidden' value='{{ csrf_token() }}' name='_token'>
            Are you sure you want to delete this record?
            <br><br>
            <input type='hidden' name='id' value='{{ $charity->id }}'>
            <button type="save" class="button">Yes</button>
            <a href='/charityfinder' class="button">No</a>
        </form>
    </div>
@stop
