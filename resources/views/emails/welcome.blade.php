@component('mail::message')
# Bienvenido a EVA

**Un docente te ha habilitado el ingreso a la plataforma!**
<br>
Para poder inscribirte a los cursos disponibles primero debes completar el registro.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/invitations/{{$hash}}'])
COMPLETAR REGISTRO
@endcomponent

Tu link es unico es: http://127.0.0.1:8000/invitations/{{$hash}}

**Te esperamos!**
<br>
Atte el equipo de {{ config('app.name') }}.
@endcomponent
