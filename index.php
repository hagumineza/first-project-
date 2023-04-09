<?php 
error_reporting(0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SHORTCOURSE REQUEST FORM</title>
</head>

<body>
<form>
<center>
<table bgcolor="cyan" height="" width="">
<tr><td><h3>SHORTCOURSE REQUEST FORM</h3></td></tr>
<tr><td>Search for:<input type="search" name="search" id="search"></td></tr>
<tr><td>First Name:<input type="text" name="fn"></td></tr>
<tr><td>Last Name:<input type="text" name="ln"></td></tr>
<tr><td>Password:<input type="password" name="pwd"></td></tr>
<tr><td>Photo:<input type="file" name="img></td></tr>
<tr><td>Gender:<input type="radio" name="gender">Male&nbsp;<input type="radio" name="gender">Female</td></tr><br>
<tr><td>Age:<input type="number" name="age" id="age" min="1" max="50" step="2"></td></tr>
<tr><td>Date:<input type="Date" name="date" value="date"></td></tr>
<tr><td>Your favorite color:<input type="color" name="color" id="color"></td></tr>
<tr><td>Courses:<input type="checkbox" name="java">JAVA<input type="checkbox" name="Dbms">DBMS<input type="checkbox" name="OOP">OOP<input type="checkbox" name="ICT">ICT</td>
<tr><td>Session:<select><option>Select Session</option>
  <option>Day</option>
    <option>Weekend</option>
	   <option>Everning</option>
  </select>
<tr><td><input type="submit" name="Submit" value="submit"></td><input type="submit" name="Reset" value="Reset"></td></tr>

</form>
<tr><td style="color:#0000FF" align="center"><h1>VIEW REPORT</h1><form action="" method="post">
search:<input type="search" name="search"><br><br>
</form>
Firstname:<?php echo $_POST["fn"];?><br>
Lastname:<?php echo $_POST["ln"]?><br>
photo:<?php echo $_POST["img"]?><br>
Gender:<?php echo $_POST["gender"]?><br>
Age:<?php echo $_POST["pwd"]?><br>
Date of birth:<?php echo $_POST["date"]?><br>
Favorite color:<?php echo $_POST["color"]?><br>
Courses:<?php echo $_POST["java"]?><br>
Session:<?php echo $_POST["select"]?><br>

</td></tr>
</body>
</html>


