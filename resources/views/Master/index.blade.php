@extends('Layouts.master')

    @section('content')
        <div class="maincontent">
            <div class="homepage">
                <div class="seasonofgiving">
                    Season of Giving
                </div>
                <strong><?php echo $wishsum ?>
                dollars </strong> have been requested to be donated to
                charities this holiday season!<br>

        <!--    <img src="/images/thankyou2.jpg" class="CharityFinderimg"/><br>
        -->    <img src="/images/change.jpg" class="CharityFinderimg"/><br>
          @if (!empty($wishgifts))
             @foreach($wishgifts as $wishgift)
                  <img alt="gift" src=/images/gift{{$wishgift}}.png><
              @endforeach
          @endif
          </div>
       </div>
    @stop
