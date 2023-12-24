@component('mail::message')

<p>Hello {{ $user->name }}</p>

<p>We understand it happens</p>

@component('mail::button', ['url' => url('reset/' . $user->remember_token)])
Reset Your password
@endcomponent

<p>In case you have issues recovering your password, please contact us.</p>

Thanks <br />
{{ config('app.name') }}

@endcomponent
