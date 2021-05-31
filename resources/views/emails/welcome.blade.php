@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Tu link es: https://taller-php.herokuapp.com/invitations/{{$hash}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
