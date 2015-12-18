@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

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

               <Br><br>Email:
                 <input
                   type='text'
                   id='email'
                   name='email'
                   value='{{$user->email}}'
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
