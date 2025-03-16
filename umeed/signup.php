<?php

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4CAF50, #81C784); /* Soft green gradient */
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }

        </style>
</head>
<body>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

username:<br>
<input type="text" name="username" placeholder="Enter your name here.."><br>

Email:<br>
<input type="email" name="email" placeholder="Enter your email address.."><br>

password:<br>
<input type="password" name="password" placeholder="Enter your password here.."><br>

<input type="submit" value="SignUp" name="signup"> <input type="submit" value="Login" name="login">






</form>
    
</body>
</html>


<?php

// if($_SERVER['REQUEST_METHOD'] == 'POST'){



error_reporting(0);
ini_set('display_errors',0);




    if(isset($_POST['login'])){
        header('location:login.php');
    }

    $name = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    if(isset($_POST['signup'])){
        if(!empty($name) && !empty($email) && !empty($password)){

        $sql = "insert into user(username,email,password)values('$name','$email','$password')";

        $result = mysqli_query($conn , $sql);

    if($result){
        echo "Successfully signed up";
        exit;
    }
    
    


}
else{
    echo "Please enter your name/email/password";
}

$sql1 = "select * from user where username='$name' and email='$email';";
$result1 = mysqli_query($conn,$sql1);

    if($result1){
        $row = mysqli_num_rows($result1);

        if($row > 0){
            echo "user already exist!";
        }

    }


        }





?>
