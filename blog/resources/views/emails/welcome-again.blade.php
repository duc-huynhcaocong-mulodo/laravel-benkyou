@component('mail::message')
# Introduction

Welcome to us!

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing.
@endcomponent

@component('mail::panel', ['url' => ''])
Hello gai.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
