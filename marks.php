<?php 
error_reporting(0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Our website</title>
</head>
<body>
<center>
<form action="" method="post">
<table border="1" align="center" bgcolor="cyan">
<tr><td>ENTER MARKS</td></tr>
<tr><td>OOP:<input type="text" name="oop"></td></tr>
<tr><td>Software Eng:<input type="text" name="se"></td></tr>
<tr><td><input type="submit" name="Print Report" value="Print Report">&nbsp;<input type="Reset" name="Reset" value="Reset">
</form>
<hr>
<b>DETAILS</b><br><br>
</table>
<?php echo "oop:".$_POST["oop"];?><br>
<?php echo "se:".$_POST["se"];?><br>
<?php
    $n1=$_POST["oop"];
    $n2=$_POST["Se"];
    $total=$n1+$n2;
    $av=$total/2;
?>
<?php echo "total:".$_POST["oop"]+$_POST["se"]?><br>
<?php echo "av:".($_POST["oop"]+$_POST["se"])/2;?><br>
<hr>
<b>DECISION:</b>
<?php
if((($_POST["oop"]+$_POST["se"])/2)>=50){
echo("Pass");
}
else
{
    
}?>echo("Fail");

</body>
</html>
