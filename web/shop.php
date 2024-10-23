<?php include('include/header.php')?>
<?php
 session_start(); 
?>
<body>
<div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="front-front-assets/img/logo/logo.png" alt="">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapse">
                    <!-- Navbar Menu -->
                    <ul class="navbar-nav ml-auto">
                        <?php
                        if(isset($_SESSION['name'])){
                        ?>
                        <li class="nav-item">
                            <a href="shop.php" class="nav-link">Shop</a>
                        </li>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar-header"><img src="front-front-assets/img/logo/avatar.jpg"></div><?php echo  $_SESSION['name'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.php">Transactions History</a>
                                <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                          </li>
                        <li class="nav-item">
                            <a href="cart.php" class="nav-link" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-basket"></i> <span class="badge badge-primary">5</span>
                            </a>
                          
                        </li>
                        <?php }
                       else{ ?>
                        <li class="nav-item">
                        <a href="shop.php" class="nav-link">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                       <?php } ?>
                    </ul>
                </div>

            </div>
        </nav>
    </div>
    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('front-assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Shopping Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-categories owl-carousel mt-5">
                        <?php 
                        include('config/db.php');
                        $sql = "SELECT * FROM `category`";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="item">
                            <a href="shop.html">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="sb-bistro-carrot"></i></span>
                                    <div class="media-body">
                                        <h5><?php  echo  $row['category_name']; ?></h5>
                                        <!-- <p>Freshly Harvested Veggies From Local Growers</p> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">All Products</h2>
                        <div class="product-carousel owl-carousel">
                          <?php
                          include('config/db.php');
                          $sql = "SELECT * FROM `product` inner  join category on product.category_id = category.id";
                          $result =  mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="<?php echo $row['image'] ?>" alt="Card image 2" class="card-img-top" width="300px" height="300px">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.php"><?php echo $row['product_name'] ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="reguler"><?php echo $row['price'] ?></span>
                                        </div>
                                        <a href="detail-product.php?id=<?php echo $row['product_id']?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">SHOES</h2>
                        <div class="product-carousel owl-carousel">
                          <?php
                          include('config/db.php');
                          $sql = "SELECT * FROM `product` inner  join category on product.category_id = category.id WHERE category.category_name = 'Shoes'";
                          $result =  mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result)){
                          ?>
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="<?php echo $row['image'] ?>" alt="Card image 2" class="card-img-top" width="300px" height="300px">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detail-product.php"><?php echo $row['product_name'] ?></a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="reguler"><?php echo $row['price'] ?></span>
                                        </div>
                                        <a href="detail-product.php?id=<?php echo $row['product_id'] ?>" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("include/footer.php") ?>