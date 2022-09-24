<?php

$servername = "localhost";
$username = "root";
$password = "Abood_93";
$dbname = "carrent";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$id = $_GET['id'];
// echo $id;
$sql = "SELECT * FROM `cars` WHERE `id` = $id";
$result = mysqli_query($conn, $sql);
$line = mysqli_fetch_assoc($result);
$CarName = $line['CarName'];
$CarImage = $line['CarImage'];
$CarModel = $line['CarModel'];
$CarPrice = $line['CarPrice'];
$CarColor = $line['CarColor'];


if (isset($_POST['submit'])) {
    $CarName = $_POST['CarName'];
    $CarImage = $_POST['CarImage'];
    $CarModel = $_POST['CarModel'];
    $CarPrice = $_POST['CarPrice'];
    $CarColor = $_POST['CarColor'];


    $sql = " UPDATE `cars` SET `CarName` = '$CarName', `CarImage` = '$CarImage' , `CarModel` = '$CarModel' , `CarPrice` = '$CarPrice' , `CarColor` = '$CarColor' WHERE `cars`.`id` = $id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:table.php");
    } else {
        echo "Data not inserted";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<h2>Update Car </h2>
<form method="POST">
    <input type="text" name="CarName" placeholder="Name of Car" value="<?php echo $CarName ?>" required>
    <input type="text" name="CarImage" placeholder="Image of Car" value="<?php echo $CarImage ?>">
    <input type="number" name="CarModel" placeholder="Model of Car" value="<?php echo $CarModel ?>" required>
    <input type="number" name="CarPrice" placeholder="Price of Car" value="<?php echo $CarPrice ?>" required>
    <input type="text" name="CarColor" placeholder="Color of Car" value="<?php echo $CarColor ?>" required>
    <input type="submit" name="submit" value="Update">
</form>
</body>

</html>