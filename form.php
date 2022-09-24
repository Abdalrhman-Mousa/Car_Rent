<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    <?php include 'conecction.php'; ?>
    <h2>Add Car</h2>
    <form action="form.php" method="POST">
        <input type="text" name="CarName" placeholder="Name of Car" required>
        <input type="text" name="CarImage" placeholder="Image of Car">
        <input type="number" name="CarModel" placeholder="Model of Car" required>
        <input type="number" name="CarPrice" placeholder="Price of Car" required>
        <input type="text" name="CarColor" placeholder="Color of Car" required>
        <input type="submit" name="addCar" value="Add Car">
    </form>


</body>
</html>

