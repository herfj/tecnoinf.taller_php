@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Tu link es: http://127.0.0.1:8000/invitations/{{$hash}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
