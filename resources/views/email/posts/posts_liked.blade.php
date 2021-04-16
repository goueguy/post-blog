@component('mail::message')
# Invitation à la journée du Code organisée par IGS

Cher, {{$liker->name}}, le Samedi 17 Janvier 2021, vous êtes invités à vous rendre à l'hotel Sofitel Ivoire pour une conférence.

@component('mail::button', ['url' => route('posts.show',$post)])
Voir ce Post
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
