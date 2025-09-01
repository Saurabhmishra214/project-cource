<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: none;
            text-size-adjust: none;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eeeeee;
        }
        .header h1 {
            color: #333333;
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px 0;
            text-align: center;
        }
        .content p {
            font-size: 16px;
            color: #555555;
            line-height: 1.6;
        }
        .content a.button {
            display: inline-block;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
            border: 1px solid #007bff;
        }
        .content a.button:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eeeeee;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Email Verification</h1>
        </div>
        <div class="content">
            <p>नमस्ते {{ $user->name }},</p>
            <p>आपकी पंजीकरण प्रक्रिया पूरी करने के लिए, कृपया नीचे दिए गए बटन पर क्लिक करके अपने ईमेल पते को सत्यापित करें।</p>
            <a href="{{ route('email-verification', ['token' => $user->email_verification_token]) }}" class="button">
                Verify My Account
            </a>
            <p style="margin-top: 20px;">यदि आप बटन पर क्लिक नहीं कर पा रहे हैं, तो कृपया नीचे दिए गए लिंक को कॉपी करके अपने वेब ब्राउज़र में पेस्ट करें:</p>
            <p style="font-size: 14px; word-break: break-all;">
                {{ route('email-verification', ['token' => $user->email_verification_token]) }}
            </p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} आपकी कंपनी का नाम। सर्वाधिकार सुरक्षित।</p>
        </div>
    </div>
</body>
</html>
