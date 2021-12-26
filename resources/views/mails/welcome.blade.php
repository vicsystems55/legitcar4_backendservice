@component('mail::message')

<h3></h3>

<p>
    Hi, {{ $data['name'] }} <br>
    Congratulations. Welcome to LegitCar. <br>

</p>

<p>
    You can now update your profile, and browse through our market place of verified vehicles.
</p>



{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Warm Regards,<br>
{{ config('app.name') }}
@endcomponent