 <?php include('header.php') ?>

 <body>
     <?php
        include('../config/db.php');
        if (isset($_POST['submit'])) {
            $addrole = $_POST['roleName'];
            $insert = "insert into roles(role_name) value('$addrole')";
            $result = mysqli_query($conn, $insert);
            if ($result) {
                echo "<script> location.replace('showrole.php')</script>";
            }
        };
        ?>
     <div class="wrapper">
         <!-- Sidebar -->
         <div class="sidebar" data-background-color="dark">
             <div class="sidebar-logo">
                 <!-- Logo Header -->
                 <div class="logo-header" data-background-color="dark">
                     <a href="front.php" class="logo">
                         <img
                             src="../assets/img/logo.png"
                             alt="navbar brand"
                             class="navbar-brand"
                             style="height: 55px; margin-right: 10px; margin-top: 15px;" />
                     </a>
                     <div class="nav-toggle">
                         <button class="btn btn-toggle toggle-sidebar">
                             <i class="gg-menu-right"></i>
                         </button>
                         <button class="btn btn-toggle sidenav-toggler">
                             <i class="gg-menu-left"></i>
                         </button>
                     </div>
                     <button class="topbar-toggler more">
                         <i class="gg-more-vertical-alt"></i>
                     </button>
                 </div>
                 <!-- End Logo Header -->
             </div>
             <div class="sidebar-wrapper scrollbar scrollbar-inner">
                 <div class="sidebar-content">
                     <ul class="nav nav-secondary">
                         <li class="nav-item">
                             <a
                                 data-bs-toggle="collapse"
                                 href="#dashboard"
                                 class="collapsed"
                                 aria-expanded="false">
                                 <i class="fas fa-home"></i>
                                 <p>Dashboard</p>
                             </a>
                         </li>
                         <li class="nav-item active submenu">
                             <a data-bs-toggle="collapse" href="#base">
                                 <i class="fas fa-layer-group"></i>
                                 <p>Role</p>
                                 <span class="caret"></span>
                             </a>
                             <div class="collapse show" id="base">
                                 <ul class="nav nav-collapse">
                                     <li class="active">
                                         <a href="addrole.php">
                                             <span class="sub-item">Add Role</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="showrole.php">
                                             <span class="sub-item">Show Role</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                 <i class="fas fa-th-list"></i>
                                 <p>Register</p>
                                 <span class="caret"></span>
                             </a>
                             <div class="collapse" id="sidebarLayouts">
                                 <ul class="nav nav-collapse">
                                     <li>
                                         <a href="addregister.php">
                                             <span class="sub-item">Add User</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="showregister.php">
                                             <span class="sub-item">Show User</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a data-bs-toggle="collapse" href="#forms">
                                 <i class="fas fa-pen-square"></i>
                                 <p>Category</p>
                                 <span class="caret"></span>
                             </a>
                             <div class="collapse" id="forms">
                                 <ul class="nav nav-collapse">
                                     <li>
                                         <a href="addcategory.php">
                                             <span class="sub-item">Add Category</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="showcategory.php">
                                             <span class="sub-item">Show Category</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                         <li class="nav-item">
                             <a data-bs-toggle="collapse" href="#tables">
                                 <i class="fas fa-table"></i>
                                 <p>Product</p>
                                 <span class="caret"></span>
                             </a>
                             <div class="collapse" id="tables">
                                 <ul class="nav nav-collapse">
                                     <li>
                                         <a href="addproduct.phpl">
                                             <span class="sub-item">Add Product</span>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="showproduct.php">
                                             <span class="sub-item">Show Product</span>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
         <!-- End Sidebar -->

         <div class="main-panel">
             <div class="main-header">
                 <div class="main-header-logo">
                     <!-- Logo Header -->
                     <div class="logo-header" data-background-color="dark">
                         <a href="index.html" class="logo">
                             <img
                                 src="../assets/img/logo.png"
                                 alt="navbar brand"
                                 class="navbar-brand"
                                 height="20" />
                         </a>
                         <div class="nav-toggle">
                             <button class="btn btn-toggle toggle-sidebar">
                                 <i class="gg-menu-right"></i>
                             </button>
                             <button class="btn btn-toggle sidenav-toggler">
                                 <i class="gg-menu-left"></i>
                             </button>
                         </div>
                         <button class="topbar-toggler more">
                             <i class="gg-more-vertical-alt"></i>
                         </button>
                     </div>
                     <!-- End Logo Header -->
                 </div>
                 <!-- Navbar Header -->
                 <nav
                     class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                     <div class="container-fluid">
                         <nav
                             class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                             <div class="input-group">
                                 <div class="input-group-prepend">
                                     <button type="submit" class="btn btn-search pe-1">
                                         <i class="fa fa-search search-icon"></i>
                                     </button>
                                 </div>
                                 <input
                                     type="text"
                                     placeholder="Search ..."
                                     class="form-control" />
                             </div>
                         </nav>

                         <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                             <li
                                 class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                 <a
                                     class="nav-link dropdown-toggle"
                                     data-bs-toggle="dropdown"
                                     href="#"
                                     role="button"
                                     aria-expanded="false"
                                     aria-haspopup="true">
                                     <i class="fa fa-search"></i>
                                 </a>
                                 <ul class="dropdown-menu dropdown-search animated fadeIn">
                                     <form class="navbar-left navbar-form nav-search">
                                         <div class="input-group">
                                             <input
                                                 type="text"
                                                 placeholder="Search ..."
                                                 class="form-control" />
                                         </div>
                                     </form>
                                 </ul>
                             </li>
                         </ul>
                     </div>
                 </nav>
             </div>
             <!-- form  -->

             <div class="container">
                 <div class="page-inner">
                     <div class="page-header">
                         <h3 class="fw-bold mb-3">Add Role</h3>
                         <ul class="breadcrumbs mb-3">
                             <li class="nav-home">
                                 <a href="#">
                                     <i class="icon-home"></i>
                                 </a>
                             </li>
                             <li class="separator">
                                 <i class="icon-arrow-right"></i>
                             </li>
                             <li class="nav-item">
                                 <a href="#">Role</a>
                             </li>
                             <li class="separator">
                                 <i class="icon-arrow-right"></i>
                             </li>
                             <li class="nav-item">
                                 <a href="#">Add Role</a>
                             </li>
                         </ul>
                     </div>
                     <form method="post" action="#">
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="card">
                                     <div class="card-header">
                                         <div class="card-title">Add Role</div>
                                     </div>
                                     <div class="card-body">
                                         <div class="row">
                                             <div class="col-md-12 col-lg-12">
                                                 <div class="form-group">
                                                     <label for="name">Role Name</label>
                                                     <input
                                                         type="text"
                                                         class="form-control"
                                                         id="name"
                                                         name="roleName"
                                                         placeholder="Enter Name"
                                                         required />
                                                 </div>
                                                 <div class="card-action">
                                                     <button class="btn btn-success" name="submit">Submit</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

             <footer class="footer">
                 <div class="container-fluid d-flex justify-content-between">
                     <nav class="pull-left">
                         <ul class="nav">
                             <li class="nav-item">
                                 <a class="nav-link" href="http://www.themekita.com">
                                     JewelryJunction
                                 </a>
                             </li>
                         </ul>
                     </nav>
                     <div class="copyright">
                         2024, made with <i class="fa fa-heart heart text-danger"></i> by
                         <a href="http://www.themekita.com">JewelryJunction</a>
                     </div>
                 </div>
             </footer>
         </div>
         <!--   Core JS Files   -->
         <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
         <script src="../assets/js/core/popper.min.js"></script>
         <script src="../assets/js/core/bootstrap.min.js"></script>

         <!-- jQuery Scrollbar -->
         <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

         <!-- Chart JS -->
         <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

         <!-- jQuery Sparkline -->
         <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

         <!-- Chart Circle -->
         <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

         <!-- Datatables -->
         <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

         <!-- jQuery Vector Maps -->
         <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
         <script src="../assets/js/plugin/jsvectormap/world.js"></script>

         <!-- Sweet Alert -->
         <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

         <!-- Kaiadmin JS -->
         <script src="../assets/js/kaiadmin.min.js"></script>

         <!-- Kaiadmin DEMO methods, don't include it in your project! -->
         <script src="../assets/js/setting-demo.js"></script>
         <script src="../assets/js/demo.js"></script>
         <script>
             $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                 type: "line",
                 height: "70",
                 width: "100%",
                 lineWidth: "2",
                 lineColor: "#177dff",
                 fillColor: "rgba(23, 125, 255, 0.14)",
             });

             $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                 type: "line",
                 height: "70",
                 width: "100%",
                 lineWidth: "2",
                 lineColor: "#f3545d",
                 fillColor: "rgba(243, 84, 93, .14)",
             });

             $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                 type: "line",
                 height: "70",
                 width: "100%",
                 lineWidth: "2",
                 lineColor: "#ffa534",
                 fillColor: "rgba(255, 165, 52, .14)",
             });
         </script>
 </body>

 </html>