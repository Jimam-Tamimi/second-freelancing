<?php
require '../partials/_db-connect.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Level 7</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b5e36b87ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">

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
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="/" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
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
                            <a href="/levels/5.php" class="nav-link">
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
                            <a href="/levels/7.php" class="nav-link     active  ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Level 7
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/levels/8.php" class="nav-link   ">
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
                                    GM  C
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Level 7</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a class="text-danger"  href="#">Home</a></li>
                                <li class="breadcrumb-item"><a> / Level 7</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div id="result" class="container my-cont row m-0 ">
                <div id="abacus" class="row">
                    <?php
                    $sql = "SELECT * FROM level_7 WHERE `type` = 'abacus'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Abacus Questions (' . $num_rows . ') </h2>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            $num = rand(1, 4);

                            echo ' 
                                <form class="question my-3 col-md-6">
                                <h4><b>' . $i . ') ' . $row['question'] . ' = ? (' . $row['type'] . ')</b></h4>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">

                                                ';
                            if ($num == 1) {
                                echo '                                        
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rh_ireh-gher-ihgr_he_ihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label" for="question-' . $i . '-a"> ' . $wAns . '';
                            }
                            echo '
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 2) {
                                
                                echo '                                        
                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhir-ehgh_er-ihgr_heihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                                <label class="form-check-label" for="question-' . $i . '-b"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 3) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhirehg-herihg_rhei_hr-ehfirhi_fhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label" for="question-' . $i . '-c"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 4) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rh_irehg-herih-gufu_ygr-ehfirg_ierfhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label" for="question-' . $i . '-d"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                ';
                            $i = $i + 1;
                        }
                    }


                    ?>
                </div>
                <div style="display:none" id="visual"  class="row">
                    <?php
                    $sql = "SELECT * FROM level_7 WHERE `type` = 'visual'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Visual Questions (' . $num_rows . ') </h2>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            $num = rand(1, 4);

                            echo ' 
                                <form class="question my-3 col-md-6">
                                <h4><b>' . $i . ') ' . $row['question'] . ' = ? (' . $row['type'] . ')</b></h4>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">

                                                ';
                            if ($num == 1) {
                                echo '                                        
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rh_ireh-gher-ihgr_he_ihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label" for="question-' . $i . '-a"> ' . $wAns . '';
                            }
                            echo '
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 2) {
                                
                                echo '                                        
                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhir-ehgh_er-ihgr_heihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                                <label class="form-check-label" for="question-' . $i . '-b"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 3) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhirehg-herihg_rhei_hr-ehfirhi_fhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label" for="question-' . $i . '-c"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 4) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rh_irehg-herih-gufu_ygr-ehfirg_ierfhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label" for="question-' . $i . '-d"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                ';
                            $i = $i + 1;
                        }
                    }


                    ?>
                </div>
                <div style="display:none" id="mul-div"  class="row">
                    <?php
                    $sql = "SELECT * FROM level_7 WHERE `type` = 'mul-div'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Multiplication Questions (' . $num_rows . ') </h2>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            $num = rand(1, 4);

                            echo ' 
                                <form class="question my-3 col-md-6">
                                <h4><b>' . $i . ') ' . $row['question'] . ' = ? (' . $row['type'] . ')</b></h4>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">

                                                ';
                            if ($num == 1) {
                                echo '                                        
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rh_ireh-gher-ihgr_he_ihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label" for="question-' . $i . '-a"> ' . $wAns . '';
                            }
                            echo '
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 2) {
                                
                                echo '                                        
                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhir-ehgh_er-ihgr_heihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                                <label class="form-check-label" for="question-' . $i . '-b"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 3) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhirehg-herihg_rhei_hr-ehfirhi_fhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label" for="question-' . $i . '-c"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 4) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rh_irehg-herih-gufu_ygr-ehfirg_ierfhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label" for="question-' . $i . '-d"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                ';
                            $i = $i + 1;
                        }
                    }


                    ?>
                </div>

                <nav id="answers">
                    <div class="nav nav-tabs">
                        <button class="nav-link active" id="nav-abacus-tab">Abacus Answers</button>
                        <button class="nav-link" id="nav-visual-tab">Visual Answers</button>
                        <button class="nav-link" id="nav-mul-div-tab">Mul/Div Answers</button>
                        <button class="nav-link" id="nav-result-tab">Result Answers</button>
                    </div>
                </nav>
                <div class="tab-content">
                    <div class="my-hide  my-show active row " id="nav-abacus"></div>
                    <div class="my-hide  row" id="nav-visual"></div>
                    <div class="my-hide  row" id="nav-mul-div"></div>
                    <div class="my-hide  row" id="nav-result"></div>
                </div>

            </div>

            <div id="timer" class="timer bg-danger">
                <div id="cross" class="cross-cont">

                    <div id="cross-1" class="cross"></div>
                    <div id="cross-2" class="cross cross-2 "></div>
                </div>

                <span id="the-time">00 M</span>
                <span id="the-time-second">00 S</span>

            </div>
            <script src="../js/jquery.min.js"></script>


            <script>
                let abacusTab = document.getElementById('nav-abacus-tab')
                let visualTab = document.getElementById('nav-visual-tab')
                let mulDivTab = document.getElementById('nav-mul-div-tab')
                let resultTab = document.getElementById('nav-result-tab')
                
                let abacusDiv = document.getElementById('nav-abacus')
                let visualDiv = document.getElementById('nav-visual')
                let mulDivDiv = document.getElementById('nav-mul-div')
                let resultDiv = document.getElementById('nav-result')
                abacusTab.addEventListener('click', () => {
                    abacusDiv.classList.add('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.add('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.remove('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-visual-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.add('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.add('active')
                    mulDivTab.classList.remove('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-mul-div-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.add('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.add('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-result-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.add('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.remove('active')
                    resultTab.classList.add('active')
                })
            </script>

            <script>
                let timer = document.getElementById('the-time')
                let timeSecondElm = document.getElementById('the-time-second')

                let cross = document.getElementById('cross')
                let cross1 = document.getElementById('cross-1')
                let cross2 = document.getElementById('cross-2')
                cross.addEventListener('click', () => {
                    cross1.classList.toggle('out-top')
                    cross2.classList.toggle('out-bottom')
                    timer.classList.toggle('opacity-0')
                    timeSecondElm.classList.toggle('opacity-0')
                    document.getElementById('timer').classList.toggle('timer-w')
                })
            </script>

            <script>
                document.getElementById('answers').style.display = 'none'
                let abacus = document.getElementById('abacus')
                let visual = document.getElementById('visual')

                let countMinute = document.getElementById('the-time')
                let countSecond = document.getElementById('the-time-second')
                let abacusMarks = 0
                let abacusDom = ''
                let abaWrong = []

                ab()

                function ab() {


                    let minute = 4
                    let second = 59

                    countMinute.innerHTML = minute + ' M &nbsp '
                    countSecond.innerHTML = second + '&nbsp S'

                    let myInterval = setInterval(() => {
                        second -= 1
                        countMinute.innerHTML = minute + ' M &nbsp  '
                        countSecond.innerHTML = second + '&nbsp  S '
                        if (second == 0) {
                            second = 60
                            minute -= 1
                            if (minute == -1) {
                                clearInterval(myInterval)
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                                    if (element.checked) {
                                        abacusMarks += 1
                                    }
                                })
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach((element, index) => {
                                    if(! element.checked){
                                        abaWrong.push(index)
                                    }
                                })

                                abacusDom = abacus.innerHTML
                                abacus.remove()
                                visual.style.display = 'flex'

                                vis()
                                console.log('call vis')
                                return ''

                            }
                        }
                    }, 1000);
                }

                let visualMarks = 0
                let visualDom = ''
                let visWrong = []
                function vis() {
                    console.log('vis')
                    let minute = 2
                    let second = 59
                    countMinute.innerHTML = minute + ' M  &nbsp '
                    countSecond.innerHTML = second + '&nbsp  S'

                    let myInterval2 = setInterval(() => {
                        second -= 1
                        countMinute.innerHTML = minute + ' M &nbsp  '
                        countSecond.innerHTML = second + '&nbsp  S '
                        if (second == 0) {
                            second = 60
                            minute -= 1
                            if (minute == -1) {
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual')).forEach(element => {
                                    if (element.checked) {
                                        visualMarks += 1
                                    }
                                })
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual')).forEach((element, index) => {
                                    if(! element.checked){
                                        visWrong.push(index)
                                    }
                                })
                                visualDom = visual.innerHTML
                                
                                visual.remove()

                                mul()
                                clearInterval(myInterval2)
                                return ''

                            }
                        }
                    }, 1000);
                }
                let mulMarks = 0
                let mulDom = ''
                let mulDiv = document.getElementById('mul-div')
                let mulWrong = []
                function mul() {
                    mulDiv.style.display = 'flex'

                    console.log('mul')
                    let minute = 2
                    let second = 59
                    countMinute.innerHTML = minute + ' M  &nbsp '
                    countSecond.innerHTML = second + '&nbsp  S'

                    let myInterval3 = setInterval(() => {
                        second -= 1
                        countMinute.innerHTML = minute + ' M &nbsp  '
                        countSecond.innerHTML = second + '&nbsp  S '
                        if (second == 0) {
                            second = 60
                            minute -= 1
                            if (minute == -1) {
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach(element => {
                                    if (element.checked) {
                                        mulMarks += 1
                                    }
                                })
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach((element, index) => {
                                    if(! element.checked){
                                        mulWrong.push(index)
                                    }
                                })
                                mulDom = mulDiv.innerHTML
                                mulDiv.remove()
                                show_details()
                                clearInterval(myInterval3)
                                return ''

                            }
                        }
                    }, 1000);
                }

                function show_details() {
                    document.getElementById('answers').style.display = 'block'
                    document.getElementById('nav-result-tab').click()

                    document.getElementById('nav-result').innerHTML = `
                    <h3 class="text-center">Your total score in Abacus is <b>${abacusMarks}</b></h3>
                    <h3 class="text-center">Your total score in Visual is <b>${visualMarks}</b></h3>
                    <h3 class="text-center">Your total score in Multiplication/Division is <b>${mulMarks}</b></h3>
                    `
                    document.getElementById('nav-abacus').innerHTML = `
                    ${abacusDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                        element.click()
                    })

                    document.getElementById('nav-visual').innerHTML = `
                    ${visualDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual')).forEach(element => {
                        element.click()
                    })
                    document.getElementById('nav-mul-div').innerHTML = `
                    ${mulDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach(element => {
                        element.click()
                    })

                    abaWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });
                    visWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });
                    mulWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });

                    
                    Array.from(document.getElementsByTagName('input')).forEach(element => {
                        element.setAttribute('disabled', '')
                    })
                    countMinute.innerHTML = '00 M '
                    countSecond.innerHTML = ' 00 S'

                }
            </script>

            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->
        
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
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/demo.js"></script> <!-- This is for dashboard costomizat-->
</body>

</html>