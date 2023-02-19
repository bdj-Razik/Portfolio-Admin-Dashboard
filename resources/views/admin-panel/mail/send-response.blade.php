@component('vendor.mail.html.message')
    # Introduction

    @component('vendor.mail.html.button' , ['url' => $url])
    View Order

    @endcomponent

    The body of your message.
    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
