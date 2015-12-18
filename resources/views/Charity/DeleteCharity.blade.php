@extends('Layouts.master')

@section('content')
    <div class="maincontent">
    <h1>Delete {{$charity->charity_or_crowdsource}}</h1>
              <form method='POST' action='/charity/delete/{{$charity->id}}'>
            <input type='hidden' value='{{ csrf_token() }}' name='_token'>
            Are you sure you want to delete the {{$charity->charity_or_crowdsource}}
            <strong>{{$charity->name}}</strong>?
            <br><br>
            <input type='hidden' name='id' value='{{ $charity->id }}'>
            <button type="save" class="button">Yes</button>
            <a href='/charityfinder' class="button">No</a>
        </form>
    </div>
@stop
