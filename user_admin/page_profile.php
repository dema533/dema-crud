<?php session_start(); 
if (!$_SESSION['auth']) {
 header('location:../login.php');
}
include('login_success.php'); 
        if (isset($_SESSION['auth'])) {
         require_once('../fonctions.php');
         require_once('../connexion.php');
         $database=new Connection;
         $db=$database->open();
         $username=$_SESSION['auth'];
         $user=SelectUser($db,$username);  

              }
              if (isset($_POST['image_update'])) {
              
              }
?><!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>user_admin</title>
    <link rel="canonical" href="#" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
  
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <?php  
                        //login_success.php
                    
                        if(isset($_SESSION["auth"]))  
                        {  
                            echo '<h3>'.$_SESSION["auth"].'</h3>';  
                          
                        }  
                        else  
                        {  
                            header("location:login.php");  
                        }  
                        ?>
                        
                                                    <!-- Light Logo text -->
                            <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul>
                        </li>
                        <
                    </ul>
                </div>
            </nav>
        </header>
       
       <?php
       require_once('left_sidebar.php');
       ?>
       
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Dashboard</h1> 
                    </div>
                    
                </div>
            </div>
           
            <div class="container-fluid">
         
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                
                                <center class="m-t-30"> <img src="<?php echo $user['user_photo']; ?>"
                                        class="rounded-circle" width="150" />
                                    <br> 
                                    
                                         <h4 class="card-title m-t-10">   
                                        <?php  
                                       if(isset($_SESSION["auth"]))  
                        {  
                            echo '<h3>'.$_SESSION["auth"].'</h3>';  
                          
                        }  
                        else  
                        {  
                            header("location:login.php");  
                        }  
                                         ?>
                                         </h4>
                                    <h6 class="card-subtitle">Utilisateur</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                           
                            
                            
    

           
                            <div class="card-body"> 
                                 <small class="text-muted">Nom</small>
                                <h6><?php echo $user['user_firstname']; ?></h6> 
                                 <small class="text-muted">Prénoms</small>
                                <h6><?php echo $user['user_lastname']; ?></h6> 
                                <small class="text-muted">Email address </small>
                                <h6><?php echo $user['user_email']; ?></h6> 
                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $user['user_tel']; ?></h6> 
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $user['user_ville']; ?></h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    
                        
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                            <?php
                          if (isset($_POST['upload'])) {
                            $file = $_FILES['image']['name'];
                            $directory = "upload/".basename($image);
                            move_uploaded_file($_FILES['image']['tmp_name'],$directory);
                           
                        


                             } 

                            ?>
                                <form class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data" action="update_profile.php">
                                    <div class="form-group">
                                        <label class="col-md-12">Nom</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control form-control-line" name="firstname" value="<?php echo $user['user_firstname']; ?>">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-12">Prénoms</label>
                                        <div class="col-md-12">
                                            <input type="text"
                                                class="form-control form-control-line" name="lastname" value="<?php echo $user['user_lastname']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" 
                                                class="form-control form-control-line" name="email"
                                                id="example-email" value="<?php echo $user['user_email']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ville/Adresse</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $user['user_ville']; ?>"
                                                class="form-control form-control-line" name="ville">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" 
                                                class="form-control form-control-line" value="<?php echo $user['user_tel']; ?>" name="tel">
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                     <label for="" class="col-md-12">Photo de profile</label>  
                                     <div class="col-md-12">
                                        <input type="file" name="fileToUpload" class="form-control">
                                     </div>      
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                        <input type="submit" name="upload_all" value="Mettre à jour toutes les informations" class="btn btn-outline-orange">
                                         <input type="submit" name="upload" value="Modifier uniquement la photo" class="btn btn-outline-primary">
                                        </div>
                                    </div>
                                </form>

                                <?php
                                
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
           
         <?php
         include('foot_admin.php');
         ?>
        
        </div>
      
    </div>
    
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>