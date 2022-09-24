<?php


$servername = "localhost";
$username = "root";
$password = "Abood_93";
$dbname = "carrent";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['addCar'])){
  $CarName = $_POST['CarName'];
  $CarImage = $_POST['CarImage'];
  $CarModel = $_POST['CarModel'];
  $CarPrice = $_POST['CarPrice'];
  $CarColor = $_POST['CarColor'];



  $sql = "INSERT INTO cars (CarName, CarImage, CarModel, CarPrice , CarColor  )
  VALUES ('$CarName', '$CarImage', '$CarModel', '$CarPrice' , '$CarColor' )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

  $sql_command = $conn->query('SELECT * FROM cars');
  // $action = mysqli_query($conn , $sql_command)
  // $allCars = $sql_command->mysqli_fetch_assoc($action);







$conn->close();


?>