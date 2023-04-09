<?php error_reporting(0) ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignement 2</title>
</head>
<body>
	<br><br>
<table border="1" cellspacing="0" align="center">
	<form method="POST" action="">
	<tr>
		<th>Enter Salary</th>
		<th>Enter Allowance</th>
		<th>Enter Transport</th>
		<th>Enter School fees</th>
	</tr>
	<tr>
		<td><input type="number" placeholder="Enter Here" name="salary" required></td>
		<td><input type="number" placeholder="Enter Here" name="allowance" required></td>
		<td><input type="number" placeholder="Enter Here" name="transport" required></td>
		<td><input type="number" placeholder="Enter Here" name="schoolfees" required></td>
	</tr>
	<tr>
		<td colspan="4"><center>
			<input type="submit" name="submit" value="Compute"><br><br>
		</center></td>
	</tr>
	<tr>
		<th>Income</th>
		<th>Expenditure</th>
		<th>BTL</th>
		<th>BTL DECISION</th>
	</tr>
	<?php 
	if (isset($_POST['submit'])) {
		?>
		<tr>
		<td><?=$_POST['salary']+$_POST['allowance']?> RWF</td>
		<td><?=$_POST['transport']+$_POST['schoolfees']?> RWF</td>
		<td><?=($_POST['salary']+$_POST['allowance'])-($_POST['transport']+$_POST['schoolfees'])?> RWF</td>
		<td><?php if ((($_POST['salary']+$_POST['allowance'])-($_POST['transport']+$_POST['schoolfees']))>500000) {
			echo "Use Airplane for transport";
		}else{
			echo "use Bus for transport";
		} ?></td>
	</tr>
		<?php
	}
	 ?>
	</form>
</table>
</body>
</html>