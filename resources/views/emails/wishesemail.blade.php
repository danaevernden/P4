<!--This is the email template that can be used to
send emails from the wisher-->

Dear Friends and Family,
<br><br>
Hope you are doing well. This year I would like the
following
@if (can find only donations)
  donations
@else
  donations and items
@endif

for the holiday season:

@foreach($wishes as $wish)
    <strong>Charity:</strong> {{$wish->charity->name}}
    <br>
    <strong>Donation Amount:</strong> ${{$wish->donation_amnt_request}}
    <br>
    <strong>Message:</strong> {{$wish->message}}
@endforeach

Thank you,<br>
{{$user->first_name}}.' '.{{$user->last_name}}
