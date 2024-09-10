
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f1f6;
        }
        .card {
            width: 100%;
            max-width: 400px;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            color: #ffffff;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #ffffff;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            background-color: #f0f1f6;
            color: #333;
        }
        .btn-primary {
            background-color: #ff4b5c;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }
        .forgot-password {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #ffffff;
        }
        .error-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #ff4b5c;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
        }
    </style>
</head>
<body>
@yield('content')
</body>
</html>
