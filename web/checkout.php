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
                        Checkout
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <section id="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7">
                        <h5 class="mb-3">BILLING DETAILS</h5>
                        <!-- Bill Detail of the Page -->
                        <form action="#" class="bill-detail">
                            <fieldset>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Company Name" type="text">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Town / City" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="State / Country" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Postcode / Zip" type="text">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" placeholder="Email Address" type="email">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" placeholder="Phone Number" type="tel">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Order Notes"></textarea>
                                </div>
                            </fieldset>
                        </form>
                        <!-- Bill Detail of the Page end -->
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <div class="holder">
                            <h5 class="mb-3">YOUR ORDER</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th class="text-right">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Ikan Segar x1
                                            </td>
                                            <td class="text-right">
                                                Rp 30.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Sirloin x1
                                            </td>
                                            <td class="text-right">
                                                Rp 120.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Mix Vegetables x1
                                            </td>
                                            <td class="text-right">
                                                Rp 30.000
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfooter>
                                        <tr>
                                            <td>
                                                <strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="text-right">
                                                Rp 180.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Shipping</strong>
                                            </td>
                                            <td class="text-right">
                                                Rp 20.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>ORDER TOTAL</strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>Rp 200.000</strong>
                                            </td>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>

                         
                        </div>
                        <p class="text-right mt-3">
                            <input checked="" type="checkbox"> I’ve read &amp; accept the <a href="#">terms &amp; conditions</a>
                        </p>
                        <a href="#" class="btn btn-primary float-right">PROCEED TO CHECKOUT <i class="fa fa-check"></i></a>
                        <div class="clearfix">
                    </div>
                </div>
            </div>
        </section>
        <?php include("include/footer.php") ?>