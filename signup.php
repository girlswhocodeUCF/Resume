<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap">

  <title>Sign Up Page</title>
</head>

<body>
  <div class="signup-container">
    <form method="post" action="signup.php">
    <h2>SIGN UP</h2>
    <!-- Input for for email -->
    <label for="fullname">Full Name</label>
    <input type="fullname" id="fullname" placeholder="fullname" name="fullname" required>
    <!-- Input for for email -->
    <label for="username">username</label>
    <input type="username" id="username" placeholder="username" name="username" required>

    <!-- Input for for password -->
    <label for="password">password</label>
    <input type="password" id="password" placeholder="password" name="password" required>

    <!-- Input for for confirm password -->
    <label for="confirm-password">confirm password</label>
    <input type="password" id="confirm-password" placeholder="confirm password" name="confirm-password">


    <!-- Submit -->
    <button type= "submit" value="Signup" name="signup_Btn">Signup</btn>
  </div>
</body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "");
if (isset($_POST['signup_Btn'])) {
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirm-password'];


  if ($password !== $confirmPassword) {
  echo "<script>alert('Passwords do not match');</script>";
} else {
  $sql = "INSERT INTO resume.logindetails (fullname, username, password) VALUES('$fullname','$username', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Sign up successful. You can now login'); window.location='login.php';</script>";
} else {
  echo "<script>alert('Error occured while signing up.');</script>";
    }
  }
}
mysqli_close($conn);
?>