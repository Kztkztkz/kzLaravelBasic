@component('mail::message')
# Welcome to our Team

Dear {{$email}},

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
