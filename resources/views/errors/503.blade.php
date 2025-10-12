<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #4a5d23 0%, #2d3b14 100%);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: white;
        }
        
        .maintenance-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            padding: 50px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            max-width: 600px;
            width: 90%;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #e9f0d9;
        }
        
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            line-height: 1.6;
            color: #d4dfc3;
        }
        
        .loader {
            border: 5px solid rgba(255, 255, 255, 0.2);
            border-top: 5px solid #a3c462;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            margin: 0 auto 30px;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .contact-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .contact-info strong {
            color: #c8d8a9;
        }
    </style>
</head>
<body>
    <div class="maintenance-container">
        <div class="loader"></div>
        <h1>í ½íº§ We'll Be Back Soon!</h1>
        <p>Our website is currently undergoing scheduled maintenance. We apologize for any inconvenience and appreciate your patience.</p>
        <p>We're working hard to improve your experience and will be back online shortly.</p>
        
        <div class="contact-info">
            <p>For urgent inquiries, please contact us at:<br>
            <strong>pio@mdf.gov.mw</strong></p>
        </div>
    </div>
</body>
</html>
