<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/admin.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./insert.css">
    <link rel="stylesheet" href="./resp.css">
    <title>Admin | Add Items </title>
</head>
<body>
    <?php
    include './headerNav.php';
    ?>

    <form action="./inserted.php" method="post" class="ms-3 mt-3 d-grid gap-1">

        <label for="name">Enter Product Name : </label>
        <input type="text" name="name" id="productName">
        
        <br>

        <label for="category">Select Category : </label>
        <select name="category">
            <option></option>
            <option>Men Watches</option>
            <option>Men Clothing</option>
            <option>Men Shoes</option>
            <option>Men Accessories</option>
            <option>Women Watches</option>
            <option>Women Clothing</option>
            <option>Women Shoes</option>
            <option>Women Accessories</option>
        </select>

        <br>

        <label for="price">Enter Product Prize : </label>
        <input type="number" name="price">
        <br>

        <label for="image" >Select Image of Product : </label>
<br>
        <input type="file" name="image" id="productPic" accept="jpeg/png/jpg">

        <br>

        <input type="submit" name="add">
    </form>
    
    <script src="./index.js"></script>
</body>
</html>