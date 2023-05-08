<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Planet Shopify!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
        <!-- watch list -->
        <h3>Mens'Watch</h3><hr>
    <div class="row text-center" id="men_watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Guess 1875</h6>
                    <h6>Price :Rs 3000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Guest Watch</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Panerai Watch</h6>
                    <h6>Price :Rs 3500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/watch4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Nonos Watch</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

        <!-- men shirt -->
        <hr><h3>Men Clothings</h3><hr>
    <div class="row text-center" id="men_shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/shirt1.jpg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Levis</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/shirt2.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Louis Philippe t-shirt</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/shirt3.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Highlander t-shirt</h6>
                        <h6>Price :Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/shirt4.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>GUCCI White t-Shirt</h6>
                        <h6>Price :Rs 2300</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- men accessories -->
        <h3>Men Accessories</h3><hr>
        <div class="row text-center" id="men_acc">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/macc1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Mens Round Ancient Necklace</h6>
            <h6>Price :Rs 300</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/macc2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Mens Headgear </h6>
            <h6>Price :Rs 250</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/macc3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Pendant Combo for Men</h6>
            <h6>Price :Rs 350</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/macc4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Metal Necklace for Men</h6>
            <h6>Price :Rs 180</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div> </div>

        <!-- men shoes -->
        <h3>Men Shoes</h3><hr> 
        <div class="row text-center" id="men_shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/shoe1.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Nike White Sneaker</h6>
                            <h6>Price :Rs 8000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/shoe2.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Nike White Shoes</h6>
                            <h6>Price :Rs 7500</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/shoe3.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Nike Yellow Sneaker</h6>
                            <h6>Price :Rs 7000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/shoe4.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>Nike Sneaker</h6>
                    <h6>Price :Rs 6000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
        <!-- men section ends -->
        
        <!-- women section -->
            <!-- women watches -->
            <h3> Women Watch </h3><hr>
            <div class="row text-center" id="ww">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/ww1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Womens Round Dial Watch</h6>
            <h6>Price :Rs 3000</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/ww2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Round Small Dial Watch for Women </h6>
            <h6>Price :Rs 2500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/ww3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Steel Belt Watch for Women</h6>
            <h6>Price :Rs 3500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/ww4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Rose Gold Steel Belt for Women</h6>
            <h6>Price :Rs 18000</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
            <!-- women shirt -->
            <h3> Women Clothings </h3><hr>
            <div class="row text-center" id="wshirt">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/women1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Desi Western Outfit </h6>
            <h6>Price :Rs 3000</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/women2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Loony Tunes Outfit </h6>
            <h6>Price :Rs 2500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/women3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Black Kurti </h6>
            <h6>Price :Rs 1500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/women4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Floral Print Western </h6>
            <h6>Price :Rs 1800</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div> </div>
</div>
            <!-- women accessories -->
            <h3> Women Accessories</h3><hr>
            <div class="row text-center" id="wacc">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wacc1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Round Ancient Hairpin</h6>
            <h6>Price :Rs 130</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wacc2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Ring Combo</h6>
            <h6>Price :Rs 250</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wacc3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Slim Chain Necklace</h6>
            <h6>Price :Rs 350</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wacc4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Hairband Combo </h6>
            <h6>Price :Rs 180</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>

            <!-- women shoes -->
            <h3> Women Shoes </h3><hr>
            <div class="row text-center" id="wshoes">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wshoes1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Black Bella Footwear</h6>
            <h6>Price :Rs 3000</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wshoes2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Grey Sandals </h6>
            <h6>Price :Rs 2500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wshoes3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Pure Leather Sandals</h6>
            <h6>Price :Rs 1500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/wshoes4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Official Footwear</h6>
            <h6>Price :Rs 1800</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
        <!-- women section ends -->
        <!-- headphones -->
        <h3> Headphones </h3> <hr>
        <div class="row text-center" id="hp">
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/sp1.jpg" alt="" class="img-fluid pb-1" >
        <div class="figure-caption">
            <h6>Bluetooth Headphones</h6>
            <h6>Price :Rs 3500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
            if (check_if_added_to_cart(1)) {
             echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
                ?>
                <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/sp2.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Black Base Headphones</h6>
            <h6>Price :Rs 3400</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(2)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                 } else {
                ?>
                <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                 }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/sp3.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Handy Wireless Speaker</h6>
            <h6>Price :Rs 500</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(3)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="col-md-3 col-6 py-2">
    <div class="card">
        <img src="images/sp4.jpg" alt="" class="img-fluid pb-1">
        <div class="figure-caption">
            <h6>Airpods Pro</h6>
            <h6>Price :Rs 1850</h6>
            <?php if (!isset($_SESSION['email'])) {?>
            <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
            <?php
            } else {
                if (check_if_added_to_cart(4)) {
                echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                } else {
                ?>
                </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>
</div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>