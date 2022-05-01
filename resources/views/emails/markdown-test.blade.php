@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url, 'color' => 'success'])
Click here
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent

{{-- app.name can be changed in
.env --}}



