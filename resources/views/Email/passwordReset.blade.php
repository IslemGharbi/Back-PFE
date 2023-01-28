@component('mail::message')
# Change password Request

Clicker sur le bouton pour changer le mot de passe

@component('mail::button', ['url' => 'http://localhost:8100/response-password-reset?token='.$token])
Changer Mot De Passe
@endcomponent

Thanks,<br>
FMS
@endcomponent
