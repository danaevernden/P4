@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">

    <div class="wishform">
      <div class="preWishTitle2">
        Edit your account information
      </div>
      <form method='POST' action='/account/edit/user'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
        <input type='hidden' name='id' value='{{ $user->id }}'>
            <div class='form-group'>

            <br><br>First Name:
             <input
               type='text'
               id='first_name'
               name='first_name'
               value='{{$user->first_name}}'
             >
             <Br><br>Last Name:
               <input
                 type='text'
                 id='last_name'
                 name='last_name'
                 value='{{$user->last_name}}'
               >
            <br><br>City:
            <input
            type='text'
            id='city'
            name='city'
            value='{{$user->city}}'
            >
            <br><br>State:
            <select name='state' id='state'>
                @foreach($states as $state)
                    <option value='{{$state}}'
                    {{ $selected = ($state == $user->state) ? 'selected' : '' }}
                        >
                        {{$state}}
                    </option>
                @endforeach
            </select>
            <button type="save" class="button">Save</button>
        </fieldset>
        </form>



  </div>
@stop
