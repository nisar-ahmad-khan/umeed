<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umeed Welfare Society</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4CAF50, #81C784); /* Soft green gradient */
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
            margin-bottom: 30px;
        }
        .button {
            display: inline-block;
            background-color: #ff9800;
            color: #ffffff;
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 25px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s, box-shadow 0.3s;
            margin: 10px;
        }
        .button:hover {
            background-color: #e68900;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
        }
        .form-container {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: 20px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .form-container input,
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
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #388E3C;
        }

        h3{
            position: absolute; top: 5px;left: 50px;
        }
    </style>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

    <input type="submit" value="Logout" name="logout">


    </form>
    <h1>Welcome to Umeed Welfare Society</h1>
    <p>Your support helps us bring hope and change to those in need.<br> Join us in making a change.</p>
    <div>
        <a href="donate.php" target="_blank" class="button">Donate Now</a>
        <a href="blood.php" target="_blank" class="button">Blood Donation</a>
    </div>

    <div class="form-container">
        <h2>Register for Aid</h2>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter full name" required>
            
            
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>
            
            <label for="address">Address</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter full address" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>




<?php

                 echo"Welcome ". $_SERVER['username'];


session_start();

                    echo "<h3>You are welcome ". $_SESSION['username']."</h3>";




if($_SERVER['REQUEST_METHOD'] == 'POST'){



    

    if(isset($_POST['logout'])){
        header('location:login.php');

        //session_destroy();
    }

}



?>
