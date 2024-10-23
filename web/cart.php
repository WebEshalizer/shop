<?php include('include/header.php')?>
<?php session_start() ?>
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
                        Your Cart
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <section id="cart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="10%"></th>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th width="15%">Quantity</th>
                                        <th width="15%">Update</th>
                                        <th>Subtotal</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include('config/db.php');
                                    $user_id = $_SESSION['user_id'];
                                    $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
                                    $result = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                     ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo $row['product_img'] ?>" width="60">
                                        </td>
                                        <td>
                                        <?php echo $row['product_name'] ?><br>
                                            <!-- <small>1000g</small> -->
                                        </td>
                                        <td>
                                        <?php echo $row['product_price'] ?><br>
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" min="1" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="1" name="vertical-spin">
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary">UPDATE</a>
                                        </td>
                                        <td>
                                        <?php echo $row['total_price'] ?><br>
                                        </td>
                                        <td>
                                            <a href="javasript:void" class="text-danger"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col">
                        <a href="shop.html" class="btn btn-default">Continue Shopping</a>
                    </div>
                    <div class="col text-right">
                   
                        <div class="clearfix"></div>
                        <h6 class="mt-3">Total: Rp 180.000</h6>
                        <a href="checkout.html" class="btn btn-lg btn-primary">Checkout <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <script>
        $(document).ready(function() {
            $(".form-control").keyup(function(){
                var value = $(this).val();
                value = value.replace(/^(0*)/,"");
                $(this).val(1);
            });

        })
    </script>
        <?php include("include/footer.php") ?>
      