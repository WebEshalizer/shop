<?php include('include/header.php')?>
<body>
<div class="page-header">
        <!--=============== Navbar ===============-->
        <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" id="page-navigation">
            <div class="container">
                <!-- Navbar Brand -->
                <a href="index.html" class="navbar-brand">
                    <img src="front-assets/img/logo/logo.png" alt="">
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
                                <div class="avatar-header"><img src="front-assets/img/logo/avatar.jpg"></div><?php echo  $_SESSION['name'] ?>
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
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        About Us
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <section class="bg-leaf">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center mb-3">
                        <h1 class="title text-uppercase mb-2">Freshcery</h1>
                        <h5>
                            Groceries Organic Store
                        </h5>
                    </div>
                    <div class="col-md-10">
                        <p class="text-justify">
                            Occaecat sunt id anim officia laborum incididunt dolore sit consequat consectetur enim fugiat aute culpa consequat cillum incididunt officia sed esse laborum anim aliqua et duis reprehenderit commodo do dolor dolor deserunt esse in aute anim adipisicing deserunt eu tempor veniam magna magna nulla in ea nulla elit est do veniam dolor pariatur in ut deserunt adipisicing est anim proident occaecat aliquip sunt enim occaecat cillum commodo in duis fugiat pariatur officia aliquip anim in dolore id id pariatur pariatur enim quis excepteur proident incididunt dolor consequat nisi et veniam occaecat sed exercitation dolore eiusmod elit sed voluptate adipisicing ut irure ad ut ex deserunt exercitation amet in eu quis ut occaecat non sunt labore reprehenderit elit commodo aute ea occaecat tempor dolor sed ut cillum aute et pariatur sit consequat commodo sunt sit amet nulla commodo aute laborum non ullamco ea laboris do adipisicing quis consequat adipisicing ea cupidatat et minim pariatur sed amet cillum commodo pariatur fugiat duis id amet ut exercitation voluptate culpa fugiat nostrud aute.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-4">
                        <img src="assets/img/fruits.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5>
                            Straight from the Farm
                        </h5>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                        <p>
                            Our farm-to-table concept emphasizes on getting the fresh produce directly from local farms to your tables within one day, hence you know you get the freshest produce straight from harvest.
                        </p>
                    </div>
                </div>

                <div class="row justify-content-center align-items-center text-right mt-3">
                    <div class="col-md-6">
                        <h5>
                            Know Your Farmers
                        </h5>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                        <p>
                            We want you to know exactly who is growing your food by having the farmers profile on each item and farmers page. You’re welcome to visit the farms and see the love they put into growing your food.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/vegetables.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="row justify-content-center align-items-center mt-3">
                    <div class="col-md-4">
                        <img src="assets/img/fish.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h5>
                            Improving Farmers’ Livelihood
                        </h5>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                        <p>
                            Slowly but sure, by cutting the complex supply chain and food system, we hope to improve the welfare of farmers by giving them the returns they deserve for their hard work.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("include/footer.php") ?>
