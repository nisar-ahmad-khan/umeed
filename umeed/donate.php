<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate Now</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2196F3, #BBDEFB); /* Delightful blue gradient */
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            max-width: 600px;
            line-height: 1.6;
            margin: 0 auto 30px auto;
        }
        .form-container {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: 20px auto;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-container button {
            width: 100%;
            background-color: #2196F3;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #1976D2;
        }
        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .payment-options label {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .b1{
            background-color: aquamarine;border:hidden;border-radius: 4px;position: absolute;left:7px;font-size: 16px;
        }
        .b1:hover{
            background-color: rgb(165, 119, 175);cursor: pointer;font-weight: bold;
        }
    </style>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
  <input type="submit" value="Back" name="back">

</form>
    <h1>Donate Now</h1>
    <p>Your contribution can bring hope to those in need. Please fill out the form below to make a donation.</p>

    <div class="form-container">
        <h2>Donation Form</h2>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            
            <label for="amount">Donation Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter the amount (e.g., 5000)" required>
            
            <label for="payment-method">Select Payment Method</label>
            <div class="payment-options">
                <label><input type="radio" name="payment-method" value="JazzCash" required> JazzCash</label>
                <label><input type="radio" name="payment-method" value="Easypaisa"> Easypaisa</label>
                <label><input type="radio" name="payment-method" value="Bank Transfer"> Bank Transfer</label>
            </div>
            
            <label for="message">Additional Message (Optional)</label>
            <textarea id="message" name="message" rows="4" placeholder="Write a message (optional)"></textarea>
            
            <button type="submit">Donate Now</button>
        </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['back'])){
    header('location:Umeed.php');
}

    //this file has to be completed yet!

?>
