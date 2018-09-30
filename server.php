<?php
session_start();
$username = "";
$email = "";
$password_1="";
$errors = array();   // array that contains errors
 // connect to the database
 $db = mysqli_connect('localhost','root','','registration');

 // if the register button is clicked

 if(isset($_POST['register'])) {
     $username = mysqli_real_escape_string($db,$_POST['username']);
     $email = mysqli_real_escape_string($db,$_POST['email']);
     $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
     $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

     // checking form field are filled properly

     if(empty($username))
     {
      array_push($errors, "Username is required");
     }
     if(empty($email))
     {
      array_push($errors, "Email is required");
     }
     if(empty($password_1))
     {
      array_push($errors, "Password is required");
     }
     if($password_1!=$password_2)
     {
      array_push($errors, "The two passwords do not match");
     }
     
     //if there is no error, adding the user in the database
     if (count($errors)==0)
     {
         $password = md5($password_1); //encrypting password before storing in database (security)
         $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
         mysqli_query($db,$sql);
         
         $_SESSION['username']=$username;
         $_SESSION['success']="You are now logged in";
         header('location: index.php'); // redirecting to home page
     }
 }

 // login from login page
 if(isset($_POST['login']))
 {
     $username=mysqli_real_escape_string($db,$_POST['username']);
     $password=mysqli_real_escape_string($db,$_POST['password_1']);

     //checking field are not empty
     if(empty($username))
     {
         array_push($errors,"Username is required");
     }
     if(empty($password)){
         array_push($errors,"Password is required");
     }
     if(count($errors)==0){
         $password=md5($password);
         $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
         $result=mysqli_query($db, $query);
         if(mysqli_num_rows($result)==1)
         {
            $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: index.php'); // redirecting to home page
         }
         else{
             array_push($errors,"Wrong username/password combination");
             //header('location: login.php');
         }

     }
 }

 //logout 
 if (isset($_GET['logout'])) {
     session_destroy();
     unset($_SESSION['username']);
     header('location: login.php');
    }
 
    ?>