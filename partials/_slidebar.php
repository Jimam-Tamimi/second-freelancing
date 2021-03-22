<?php

$pages = array();
$pages["/"] = "Dashboard";
$pages["1.php"] = "Level 1";
$pages["2.php"] = "Level 2";
$pages["3.php"] = "Level 3";
$pages["4.php"] = "Level 4";
$pages["5.php"] = "Level 5";
$pages["6.php"] = "Level 6";
$pages["7.php"] = "Level 7";
$pages["8.php"] = "Level 8";
$pages["gm-a.php"] = "GM A";
$pages["gm-b.php"] = "GM B";
$pages["gm-c.php"] = "GM C";




?>

<aside class="main-sidebar sidebar-dark-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Quistions</span>
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

        SidebarSearch Form
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

                        <?php
                        
                        foreach ($pages as $key => $value) {
                            echo '
                            <li class="nav-item">
                            <a href="/levels/'.$key.'" class="nav-link ';
                            if($value == $cPage){
                                echo 'active';
                            }
                            echo ' ">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    '. $value .'
                                </p>
                            </a>
                            </li>
                        ';
                        }
                        
                        ?>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>