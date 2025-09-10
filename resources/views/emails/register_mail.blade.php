<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Created Successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #28a745;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .header img {
            max-width: 100px;
            margin-bottom: 10px;
        }
        .content {
            padding: 30px 20px;
            color: #333333;
            line-height: 1.6;
        }
        .content h1 {
            color: #28a745;
        }
        .content p {
            margin: 15px 0;
        }
        .button {
            display: inline-block;
            padding: 12px 25px;
            margin-top: 20px;
            background-color: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            background-color: #f0f0f0;
            color: #555555;
            padding: 15px 20px;
            text-align: center;
            font-size: 12px;
        }
        @media screen and (max-width: 600px) {
            .email-container {
                margin: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ asset('images/logo.png') }}" alt="Company Logo">
            <h2>Welcome to therealworld</h2>
        </div>
        <div class="content">
            <h1>Hello {{ $name }},</h1>
            <p>Your account has been created successfully!</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Referral Link:</strong> <a href="{{ $referral_link }}">{{ $referral_link }}</a></p>
            <a href="{{ url('/') }}" class="button">Visit Our Website</a>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} therealworld | <a href="{{ url('/') }}">Website</a><br>
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>
</html>
