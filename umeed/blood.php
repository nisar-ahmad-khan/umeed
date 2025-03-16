<?php


include "connection.php";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donor Registration</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #FF5252, #FF8A80); /* Soft red gradient */
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
        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, box-shadow 0.3s;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #388E3C;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
        .donor-list-container {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: 20px auto;
            text-align: left;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .donor-list-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .donor-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .donor-list li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .form-container {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
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
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .form-container button {
            width: 100%;
            background-color: #FF5252;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #E53935;
        }
    </style>
</head>
<body>
    <h1>Blood Donor Registry</h1>
    <p>Join our community of lifesavers. Check the list of available donors or register yourself to help someone in need.</p>

    <!-- Donor List -->
    <div class="donor-list-container">
        <h2>List of Blood Donors</h2>
        <ul class="donor-list">
            <li></li>
            <li>Farhan Ahmad - Blood Group: B-</li>
            <li>Waqar Ahmad - Blood Group: O+</li>
            <!-- Add more donors dynamically -->
        </ul>
    </div>
Nisar Ahmad - Blood Group: A+
    <!-- Registration Form -->
    <div class="form-container">
        <h2>Register as a Blood Donor</h2>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])  ?>" method="post">
            <label for="name">Full Name</label>
            <input type="text" name="name" placeholder="Enter full name" required>
            
            
            <label for="phone">Phone Number</label>
            <input type="tel"  name="phone" placeholder="Enter phone number" required>
            
            <label for="blood-group">Blood Group</label>
            <select  name="blood-group" required>
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            
            <button type="submit" value="Submit" name="submit">Register as Donor</button>
        </form>
    </div>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    error_reporting(0);
    ini_set('display_errors',0);


$name = $_POST['name'];
$phone = $_POST['phone'];
$blood = $_POST['blood-group'];

if(!empty($name) && !empty($phone) && !empty($blood)){


    $sql = "insert into blood where name='$name' and phone='$phone' and blood='$blood'";
    $result = mysqli_query($conn ,$sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['name'];
        }
    }

    








}






}





?>
