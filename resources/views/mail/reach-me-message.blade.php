@component('mail::message')
# Reach Me Message

###### Email: {{ $message->email }}

{{ $message->body }}

Thanks,<br>
{{ $message->sender }}
@endcomponent
