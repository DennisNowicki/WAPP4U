@component('mail::message')
# Thanks for your message. We'll get in touch as soon as possible.

<strong>Name:</strong> {{ $data['name']}}
<strong>Email:</strong> {{ $data['email']}}

<strong>Message:</strong> 

{{$data['message']}}

@endcomponent
