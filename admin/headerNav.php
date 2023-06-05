<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./resp.css">
</head>

<body>
    <!-- for header part -->
    <header>

        <div class="logosec">
            <div class="logo">Shopify</div>
            <img src="./images/menu.png" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Search" class="searchbar">
            <div class="searchbtn">
                <img src="./images/searching.png" class="icn srchicn" alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="dp">
                <img src="./images/admin.png" class="dpicn" alt="dp">
            </div>
        </div>

    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options"> <a href="./adminPage.php">
                        <div class="nav-option option1">
                            <img src="./images/dashboard.png" class="nav-img" alt="dashboard">
                            <h3 id="navText"> Dashboard </h3>
                    </a>
                </div>

                <div class="nav-option option3"> <a href="./insert.php">
                        <img src="./images/add.png" class="nav-img" alt="report">
                        <h3 id="navText"> Insert Items </h3>
                    </a>
                </div>

                <div class="nav-option option3"> <a href="./insert.php">
                        <img src="./images/delete.png" class="nav-img" alt="report">
                        <h3 id="navText"> Remove Items </h3>
                    </a>
                </div>

                <div class="nav-option logout"> <a href="./logout.php">
                        <img src="./images/logOut.png" class="nav-img" alt="logout">
                        <h3 id="navText">Logout</h3>
                    </a>
                </div>

            </nav>
        </div>
    </div>
</body>

</html>