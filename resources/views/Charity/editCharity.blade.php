@extends('Layouts.master')

@section('content')
    <div class="maincontent">
        <div class="wishform">
          @if(count($errors) > 0)
            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul><br>
          @endif
            Edit Charity or Crowdsource
            <form class='charityeditform' method='POST' action='/charity/edit'>
                <input type='hidden' value='{{ csrf_token() }}' name='_token'>
                <fieldset>
                    <input type='hidden' name='id' value='{{ $charity->id }}'>
                    Charity:
                    <input
                        type='text'
                        id='name'
                        name='name'
                        value='{{$charity->name}}'
                    >
                    @if ($charity->charity_or_crowdsource == 'charity')
                        <br><br>Mission Statement:
                        <textarea
                            id='mission'
                            name='mission'
                        >
                            {{$charity->mission}}
                        </textarea>
                    <br><br>Year Founded:
                    <input
                        type='text'
                        id='year_founded'
                        name='year_founded'
                        value='{{$charity->year_founded}}'
                    >
                @endif
                <br><br>City:
                <input
                    type='text'
                    id='city'
                    name='city'
                    value='{{$charity->city}}'
                >
                <br><br>State:
                <select name='state' id='state'>
                    @foreach($states as $state)
                        <option value='{{$state}}'
                        {{ $selected = ($state == $charity->state) ? 'selected' : '' }}
                            >
                            {{$state}}
                        </option>
                    @endforeach
                </select>
                <br><br>Detailed Description:
                <textarea
                    id='description'
                    name='description'
                    >
                {{$charity->description}}
                </textarea>
                <br><br>Website:
                <input
                    type='text'
                    id='website'
                    name='website'
                    size='35'
                    value='{{$charity->website}}'
                >
                <br><br>URL of Logo:
                <input
                    type='text'
                    id='logo_or_pic'
                    name='logo_or_pic'
                    size='35'
                    value='{{$charity->logo_or_pic}}'
                >
                <br>
                <button type="submit" class="button">Save</button>
                <a href="/charity/delete/{{$charity->id}}" class="button">
                    Delete Charity
                </a>
            </fieldset>
        </form>
        <br>
        <a href="/charityfinder" class="button">Back</a>
    </div>
  </div>
@stop
