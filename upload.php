<?php
require 'partials/_db-connect.php';
$success = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload']) == 'Upload') {
    $level = $_POST['level'];
    $sql = "INSERT INTO level_" . $level ." (`type`, `question`, `answer`) VALUES " . $_POST['question'];
    if(substr($sql, -1) == ','){

    }
    $sql2 = "DELETE FROM level_". $level ."";
    $result = mysqli_query($conn, $sql2);
    $result2 = mysqli_query($conn, $sql);
    if($result && $result2){
        $success = true;
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b5e36b87ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="css/OverlayScrollbars.min.css">

    <!-- custom css  -->
    <style>
        .timer {
            width: 200px;
            height: 60px;
            background: #00a1fc;
            position: fixed;
            top: 150px;
            z-index: 2222222;
            right: 120px;
            border-radius: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .timer span {
            color: white;
            font-weight: 800;
            font-size: 1.7rem;
        }
    </style>
    <style>
        .cross-cont {
            width: 36px;
            height: 57px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cross {
            transition: all .5s;
            cursor: pointer;
            width: 30px;
            height: 5px;
            background: white;
            /* margin-right: 9px; */
            /* position: absolute; */
            position: relative;
            right: 7px;
            top: 1px;
            transform: rotate(45deg);

        }

        .cross-2 {
            transform: rotate(-45deg);
        }

        .out-top {
            top: -3px;
            width: 20px;
            transform: rotate(-45deg);
        }

        .out-bottom {
            transform: rotate(45deg);
            top: 3px;
            width: 20px;
        }

        .timer-w {
            width: 65px;
            right: 10px;
        }

        #the-time {
            transition: all .3s;
        }

        #the-time-second {
            transition: all .3s;
        }

        .opacity-0 {
            opacity: 0;
            transform: scale(0);
            position: absolute;
            top: 0;
            left: 0;
        }

        .timer {
            transition: all .5s
        }

        .my-hide {
            display: flex !important;
            transform: scale(0);
            transition: all .5s;
            opacity: 0;
            position: absolute;
        }

        .my-show {
            transform: scale(1) !important;
            opacity: 1 !important;
            position: relative !important;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top ">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- SEARCH FORM
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-danger elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> -->
                <span class="brand-text font-weight-light">Questions</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a class="d-block">Student</a>
                    </div>
                </div>

                <p style="color: white;">SidebarSearch Form</p>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <!-- Sidebar Menu -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="/superuser" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt active"></i>
                                <p>
                                    Super User
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/1.php" class="nav-link ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 1
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/2.php" class="nav-link ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 2
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/3.php" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 3
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/4.php" class="nav-link  ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 4
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/5.php" class="nav-link ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 5
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/6.php" class="nav-link   ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 6
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/7.php" class="nav-link       ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 7
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/8.php" class="nav-link  ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 8
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/gm-a.php" class="nav-link     ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    GM A
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/gm-b.php" class="nav-link  ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    GM B
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/gm-c.php" class="nav-link  ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    GM C
                                </p>
                            </a>
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-top: 57px;" class="content-wrapper">

        <?php
        
        if($success){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Question Added</strong>Your questions are added successfully!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            ';
        }
        
        ?>
        
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Super User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a> / Super User</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="container">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Select Level</label>
                        <select required name="level" class="form-select" aria-label="Default select example">
                            <option selected disabled>Select Level</option>
                            <option value="1">Level 1</option>
                            <option value="2">Level 2</option>
                            <option value="3">Level 3</option>
                            <option value="4">Level 4</option>
                            <option value="5">Level 5</option>
                            <option value="6">Level 6</option>
                            <option value="7">Level 7</option>
                            <option value="8">Level 8</option>
                            <option value="9">Level 9</option>
                            <option value="10">Level 10</option>
                            <option value="11">Level 11</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <div class="form-floating">
                            <textarea name="question" class="form-control" placeholder="Enter Your Questions" id="floatingTextarea2" style="height: 500px"></textarea>
                            <label for="floatingTextarea2">Enter Your Questions</label>
                          </div>
                    </div>

                    <input type="submit" name="upload" value="Upload" class="btn btn-primary" />
                </form>
            </div>


            <script src="../js/jquery.min.js"></script>



            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
        <footer id="footer" class="main-footer">
            <strong>Copyright &copy; 2021-2026 <a href="https://adminlte.io">Jimam Tamimi</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <!-- jQuery UI 1.11.4 -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        // $.widget.bridge('uibutton', $.ui.button)
    </script> <!-- Bootstrap 4 -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script> <!-- This is for dashboard costomizat-->
</body>

</html>