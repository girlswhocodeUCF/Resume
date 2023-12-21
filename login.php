<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap">

  <title>Login Page</title>

</head>

<body>
<form method = "post" action = "login.php">

  <div class="signup-container">
    <h2>LOGIN</h2>
    <!-- Input for for email -->
    <label for="username">username</label>
    <input type="username" id="username" placeholder="username" name = "username">

    <!-- Input for for password -->
    <label for="password">password</label>
    <input type="password" id="password" placeholder=" password" name = "password" >

    <!-- Login/Sign Up Buttons -->
    <div class="button-container">
      <input class="square-button" type="submit" id="loginButton" value="LOGIN" name = "login_Btn" >

      <button onclick="window.location='signup.php';" class="square-button" type="button" id="signUpButton"> SIGN UP </button>
      
      </a>
    </div>

    <!-- Forgot Password Hyperlink -->
    <p id="forgotPassword"> <a href="password.php"> Forgot Password? </a> </p>
  </div>

</form>
</body>


</html>

<?php


$conn = mysqli_connect("localhost", "root", "");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM resume.logindetails WHERE username = '$username'";
    $result= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:index.html');
        }else {
            echo "<script> alert ('login unsucessful');
        </script>";
        }
    }
}

?>