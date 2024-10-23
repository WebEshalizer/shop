<?php include("include/header.php") ?>
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
    <?php
include('config/db.php');

if (isset($_POST['login'])) {
    $id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    
    // Modify the SQL query to also fetch the user_id
    $result = "SELECT * FROM `register` WHERE Name = '$name' AND Email = '$email'";
    $query = mysqli_query($conn, $result);

    if (mysqli_num_rows($query) > 0) {
        session_start(); // Start the session

        // Fetch the user data
        $user = mysqli_fetch_assoc($query);
        
        // Set session variables
        $_SESSION['user_id'] = $id; // Add this line to store user_id
        $_SESSION['name'] = $name; // Store the user's name

        echo "<script>alert('Login Successfully')</script>";
        echo "<script>window.location.href='front.php'</script>";
    } else {
        echo "<script>alert('Invalid Email or Password')</script>";
    }
}
?>

    <div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('front-assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Login Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>

                    <div class="card card-login mb-5">
                        <div class="card-body">
                            <form class="form-horizontal" action="#" method="post">
                                <div class="form-group row mt-3">
                                <div class="col-md-12">
                                        <input class="form-control" type="hidden" required="" placeholder="user_id" name="user_id">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" required="" placeholder="Name" name="name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="email" required="" placeholder="Email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                                        <!-- <div class="checkbox">
                                            <input id="checkbox0" type="checkbox" name="remember">
                                            <label for="checkbox0" class="mb-0"> Remember Me? </label>
                                        </div> -->
                                        <!-- <a href="login.html" class="text-light"><i class="fa fa-bell"></i> Forgot password?</a> -->
                                    </div>
                                </div>
                                <div class="form-group row text-center mt-4">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-block text-uppercase" name="login">Log In</button>
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
