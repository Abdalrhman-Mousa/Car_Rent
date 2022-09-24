
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


$id = $_GET['id'];
$query = "DELETE FROM cars WHERE id = $id;";
$result = mysqli_query($conn, $query);
if ($result) {
    mysqli_close($conn);
    header("location:table.php");
} else {
    echo "Error deleting record";
}


 
 ?>  