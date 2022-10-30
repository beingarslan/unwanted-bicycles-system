@component('mail::message')
# Your signup link
 
Please click the button below to sign up for your account!
Password: {{ $password }}
 
@component('mail::button', ['url' => $url])
Create Application
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent