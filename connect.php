<?php
// Replace the database credentials with your own
$host = "localhost";
$username = "root";
$password = "";
$database = "students";

// Create a mysqli object and connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected successful <br>";
}


// Perform a query on the database
// $sql = "SELECT * FROM buyers";
// $result = $conn->query($sql);

// Process the query result
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     echo "Fname: " . $row["Fname"] . ", Lname: " . $row["Lname"] . "".", Gender: ".$row["Gender"];
//   }
// } else {
//   echo "0 results";
// }

// Close the database connection
$conn->close();

?>