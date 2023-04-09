<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget</title>
</head>
<body>
    
<center>

<form method="post">
    <h2> Calculate budget</h2>
  <label for="salary">Salary:</label>
  <input type="number" id="salary" name="salary"><br><br>
  
  <label for="allowance">Allowance:</label>
  <input type="number" id="allowance" name="allowance"><br><br>
  
  <label for="transport">Transport:</label>
  <input type="number" id="transport" name="transport"><br><br>
  
  <label for="school-fees">School fees:</label>
  <input type="number" id="school-fees" name="school-fees"><br><br>
  
  <input type="submit" value="Print report" name="submit"> <input type="reset" value="Reset" name="reset">
</form>



<?php
if(isset($_POST['submit'])) {
  $salary = $_POST['salary'];
  $allowance = $_POST['allowance'];
  $transport = $_POST['transport'];
  $schoolFees = $_POST['school-fees'];

  $totalIncome = $salary + $allowance;
  $totalExpenditure = $transport + $schoolFees;
  $btl = $totalIncome - $totalExpenditure;
  
  echo "Total Income: " . $totalIncome . "<br>";
  echo "Total Expenditure: " . $totalExpenditure . "<br>";
  echo "BTL: " . $btl . "<br>";
}
?>

<?php
if(isset($_POST['submit'])) {
 

  if ($btl > 5000000) {
    echo "Use airplane for transport";
  } else {
    echo "Use bus for transport";
  }
}
?>



</body>
</html>
