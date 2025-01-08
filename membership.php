<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "membership_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $membershipType = $_POST['membershipType'];
    $paymentMethod = $_POST['paymentMethod'];
    $cardNumber = $_POST['cardNumber'];
    $expiryDate = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];

    $sql = "INSERT INTO memberships (full_name, email, phone, membership_type, payment_method, card_number, expiry_date, cvv)
            VALUES ('$fullName', '$email', '$phone', '$membershipType', '$paymentMethod', '$cardNumber', '$expiryDate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        $message = "Membership successfully submitted!";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

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
        form {
            display: flex;
            flex-direction: column;
        }
        form label {
            margin-bottom: 5px;
        }
        form input, form select, form button {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            width: 100%;
        }
        form button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to Acción Latina Membership</h1>
        <p>Join our community and enjoy exclusive benefits!</p>
    </div>

    <div class="container">
        <h2>Membership Form</h2>
        <?php if (!empty($message)) echo "<p class='message'>$message</p>"; ?>
        <form method="post" action="">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="membershipType">Membership Type</label>
            <select id="membershipType" name="membershipType" required>
                <option value="">-- Select Membership Type --</option>
                <option value="basic">Basic - $10/month</option>
                <option value="premium">Premium - $25/month</option>
                <option value="family">Family - $40/month</option>
            </select>

            <label for="paymentMethod">Payment Method</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="">-- Select Payment Method --</option>
                <option value="credit_card">Credit/Debit Card</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Bank Transfer</option>
            </select>

            <label for="cardNumber">Card Number</label>
            <input type="text" id="cardNumber" name="cardNumber" required>

            <label for="expiryDate">Card Expiry Date</label>
            <input type="month" id="expiryDate" name="expiryDate" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>

            <label>
                <input type="checkbox" name="terms" required> I agree to the <a href="#">terms and conditions</a>
            </label>

            <button type="submit">Submit Membership</button>
        </form>
    </div>
</body>
</html>
