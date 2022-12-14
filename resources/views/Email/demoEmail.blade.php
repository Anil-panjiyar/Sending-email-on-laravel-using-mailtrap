@component('mail::message')
 Try

@component('mail::button', ['url' =>$mailData['url']])
Hello how are you

@endcomponent

Thanks, Anil Panjiyar<br>
{{ config('app.name') }}
@endcomponent
