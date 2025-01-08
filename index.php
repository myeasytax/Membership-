<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acción Latina Membership</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .header {
            background-color: #007BFF;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .membership-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .membership-option {
            flex: 1;
            margin: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fafafa;
            text-align: center;
        }
        .membership-option h3 {
            margin-bottom: 10px;
        }
        .membership-option p {
            margin-bottom: 15px;
        }
        .membership-option button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .membership-option button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Acción Latina Membership</h1>
        <p>Join our community and enjoy exclusive benefits!</p>
    </div>

    <div class="container">
        <h2>Choose Your Membership Plan</h2>
        <div class="membership-options">
            <div class="membership-option">
                <h3>Basic Membership</h3>
                <p>$10/month</p>
                <p>✔ 10% discount on services</p>
                <p>✔ Access to webinars</p>
                <p>✔ Early appointment booking</p>
                <button onclick="location.href='membership.php'">Sign Up</button>
            </div>
            <div class="membership-option">
                <h3>Premium Membership</h3>
                <p>$25/month</p>
                <p>✔ 20% discount on services</p>
                <p>✔ Free legal consultation</p>
                <p>✔ Priority support</p>
                <button onclick="location.href='membership.php'">Sign Up</button>
            </div>
            <div class="membership-option">
                <h3>Family Membership</h3>
                <p>$40/month</p>
                <p>✔ 25% discount on services</p>
                <p>✔ Includes up to 4 family members</p>
                <p>✔ Free workshops & events</p>
                <button onclick="location.href='membership.php'">Sign Up</button>
            </div>
        </div>
    </div>
</body>
</html>
