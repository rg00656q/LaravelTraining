@component('mail::message')
    # Introduction

    Hello {{ $data->name }}
    This is for the moment a placeholder for either
    - A reset password mail
    - A send verification code mail

    @component('mail::button', ['url' => 'localhost:8000'])
        My Website
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
