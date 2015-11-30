@extends('Layouts.master')

    @section('content')
        <div class="maincontent">
            <div class="homepage">Season of Giving</div>
            <strong><?php echo $wishes ?>
             dollars </strong> have been requested to be donated to
             charities this holiday season!
        <!--    <img src="/images/thankyou2.jpg" class="CharityFinderimg"/><br>
        -->    <img src="/images/change.jpg" class="CharityFinderimg"/>
        </div>
    @stop
