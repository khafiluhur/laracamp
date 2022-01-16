@component('mail::message')
# Your Transaction Has been Confirmed

Hi {{ $checkout->User->name }}
<br>
Your Transaction has been confirmed, now you can enjoy the benefits of <b>{{ $checkout->Camp_title }}</b> camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
