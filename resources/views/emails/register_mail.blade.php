<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to {{ config('app.name') }}</title>
</head>
<body>
    <h2>Hello, {{ $name }}!</h2>

    <p>Welcome to <strong>{{ config('app.name') }}</strong>. Your account has been created successfully.</p>

    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Password:</strong> {{ $password }}</p>

    <p>Use the following referral link to invite your friends:</p>
    <p><a href="{{ $referral_link }}">{{ $referral_link }}</a></p>

    <p>Thank you for joining us!</p>

    <br>
    <p>Best regards,<br>{{ config('app.name') }} Team</p>
</body>
</html>