<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/admin.png">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./resp.css">
    <link rel="stylesheet" href="./insert.css">
    <title>Admin | Items Added </title>
</head>

<body>

    <?php
    include './headerNav.php';

    $server = "localhost";
    $uname = "root";
    $pswd = "";
    $dbname = "ecommerce";

    //create connection
    $conn = new mysqli($server, $uname, $pswd, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $pic = $_POST['image'];

    $sql = "INSERT INTO products (name, price, category, photos) VALUES ('$name', '$price', '$category', '$pic')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>
    <h1 id="ins">Item Added</h1>

    <video src="./images/verified.mp4"></video>

    <script src="./index.js"></script>
</body>

</html>