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