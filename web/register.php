<?php include("include/header.php") ?>

<body>
    <?php
    include('config/db.php');
    if (isset($_POST['submit'])) {
        $name = $_POST['userName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $number = $_POST['number'];
        $roleid = $_POST['user_id'];
        $check = "SELECT * FROM  register WHERE email = '$email'";
        $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Email already exist')</script>";
        } else {
            $sql = "INSERT INTO `register` ( `Name`, `Email`, `Address`, `Phone Number`, `Role_id`) VALUES ('$name',  '$email', '$address', '$number', '$roleid')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>location.replace('login.php')</script>";
                echo "<script>alert('Data Inserted')</script>";
            } else {
                echo "<script>alert('Data not Inserted')</script>";
            }
        }
    }

    ?>
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
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('front-assets/img/bg-image.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Register Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                    <?php
                    include("config/db.php");
                    $select =  "SELECT * FROM roles WHERE role_name = 'User'";
                    $result = mysqli_query($conn,  $select);
                    while ($row = mysqli_fetch_array($result)) { ?>

                        <div class="card card-login mb-5">
                            <div class="card-body">
                                <form class="form-horizontal" action="#" method="post">
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input class="form-control" type="hidden" name="user_id" required value="<?php echo $row['id']; ?>">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="userName" required="" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" name="email" required="" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="address" required="" placeholder="Address">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-md-12">
                                        <input class="form-control" type="number" name="number" required="" placeholder="Number">
                                    </div>
                                </div>

                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit">Register</button>
                                    </div>
                                </div>
                                
                                </form>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php include("include/footer.php") ?>