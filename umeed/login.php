<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">


</head>
<body>

<div class="container mt-5">

<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
  <div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">username:</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" name="password">
  </div>
  
  <input type="submit" class="btn btn-primary" value="Login" name="login">
  <input type="submit" class="btn btn-primary" value="Signup" name="signup">
</form> 
</div>
    
</body>
</html>



<?php
include('connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['username'];

// $email = $_POST['email'];

$password = $_POST['password'];

// if(isset($_POST['login'])){

    // if($name == 'nisar'&& $password == 12345){
    //     header('location:Umeed.php');
    // }
    
// }

if(isset($_POST['signup'])){
    error_reporting(0); // Turns off all error reporting//
ini_set('display_errors', 0);

    header('location:signup.php');
}


if(isset($_POST['login'])){
    if(!empty($name) && !empty($password)){

        $sql1 = "select * from user where username='$name'and password='$password';";
        $result1 = mysqli_query($conn,$sql1);
        
            if($result1){
                
                
                $row = mysqli_num_rows($result1);
        
                if($row > 0){
                    

                    session_start();

                    $_SESSION['username'] = $name;


                    header('location:Umeed.php');
                }
                else{
                    echo "<div class='container' style='color:red'>invalid credentials!</div>";
                }
        
            }
    
    }
}





}




?>