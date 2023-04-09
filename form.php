<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "students";
$conn = mysqli_connect($host, $username,$password, $database);

  echo 'connection successfully';
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql="INSERT INTO student_table(firstname,lastname,username,email,password) VALUES('$firstname','$lastname','$username','$email','$password')";
  if(mysqli_query($conn,$sql)){
    echo 'inserted successfully';
  }else{
    echo 'failed to insert'.mysqli_error($conn);
  }

  mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
<style>
input[type=text],input[type=email],input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">User Name</label>
    <input type="text" id="lname" name="username" placeholder="Your username..">

    <label for="lname">Email</label>
    <input type="email" id="lname" name="email" placeholder="Your Email..">

    <label for="lname">Password</label>
    <input type="password" id="lname" name="password" placeholder="Your Password..">
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>


