@component('mail::message')

#thank you for your email {{$user['name'] ?? 'dear user'}}




@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
