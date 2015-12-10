@extends('Layouts.master')

@section('header')
  <div class="banner">


  </div>
@stop

@section('content')
  <div class="maincontent">

    <div class="wishform">
      <div class="preWishTitle2">
        Edit a wish
      </div>
      <form method='POST' action='/account/edit'>
      <input type='hidden' value='{{ csrf_token() }}' name='_token'>
      <fieldset>
        <div class='form-group'>
            *Charity:
            <select name='charity' id='charity'>
                @foreach($charities as $charity)
                    <option value='{{$charity->id}}'
                      {{ $selected = ($charity->id == $wish->charity->id) ? 'selected' : '' }}
                      >
                        {{$charity->name}}
                    </option>
                @endforeach
            </select>
        </div>

             <Br><br>Donation Amount Request:
               <input
                 type='integer'
                 id='donation_amnt_request'
                 name='donation_amnt_request'
                 value='{{$wish->donation_amnt_request}}'
               >
            <br><br>Message:
            <textarea
            id='message'
            name='message'
            value='{{$wish->message}}'
            >
            {{$wish->message}}
            </textarea>
            <br><br>Wrapping Paper:
            <input type="radio"
            id="wrapping_paper_color"
            name="wrapping_paper_color"
            value="1"
            <?php echo ($wish->wrapping_paper_color==1)?'checked':'' ?>
            ><img src=/images/gift1.png></img>

            <input type="radio"
            id="wrapping_paper_color"
            name="wrapping_paper_color"
            value="2">
            <?php echo ($wish->wrapping_paper_color==2)?'checked':'' ?>
            <img src=/images/gift4.png></img>

            <input type="radio"
            id="wrapping_paper_color"
            name="wrapping_paper_color"
            value="3">
            <?php echo ($wish->wrapping_paper_color==3)?'checked':'' ?>
            <img src=/images/gift3.png></img>

            <input type="radio"
            id="wrapping_paper_color"
            name="wrapping_paper_color"
            value="4">
            <?php echo ($wish->wrapping_paper_color==4)?'checked':'' ?>
            <img src=/images/gift6.png></img>
            <br><br>
            <button type="save" class="button">Save</button>
            <a href='/account/delete/{{$wish->id}}' class="button">
            Delete Wish</a>

        </fieldset>
        </form>



  </div>
@stop
