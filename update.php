<!DOCTYPE html>
<html lang="en">

<?php


require 'partials/_db-connect.php';
$title = 'Super User';


session_start();
   



if(!isset($_SESSION['login']) &&  $_SESSION['login'] != true && !isset($_SESSION['superuser']) && $_SESSION['superuser'] != true){
    header('location: /login');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload']) && $_POST['upload'] == 'Upload') {
    $level = $_POST['level'];
    $sql = "INSERT INTO level_" . $level ." (`type`, `question`, `answer`) VALUES " . $_POST['question'];

    $sql2 = "DELETE FROM level_". $level ."";
    $result = mysqli_query($conn, $sql2);
    $result2 = mysqli_query($conn, $sql);
    if($result && $result2){
        header('location: /superuser');
    }
    
}

?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
            echo $title;

            ?></title>

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
            transform: scale(0) !important;
            transition: all .5s !important;
            opacity: 0 !important;
            position: absolute !important;
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
        <?php

        include 'partials/_nav.php';

        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include 'partials/_slidebar.php';

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-top: 57px;" class="content-wrapper">

            <?php

            include 'partials/_content-header.php';

            ?>

            <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->


            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-upload-tab" type="button">Upload Questions</button>
                    <button class="nav-link" id="nav-change-tab" type="button">Edit Password</button>
                    <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button> -->
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class=" fade my-show active" id="nav-upload" role="tabpanel" aria-labelledby="nav-home-tab">
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

                            <input type="submit" name="upload" value="Upload" class="btn btn-primary mb-3" />
                        </form>
                    </div>

                </div>
                <div class=" fade my-hide" id="nav-change" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container">

                        <form action="pass.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Select Level</label>
                                <select required name="type" class="form-select" aria-label="Default select example">
                                    <option selected disabled>Select Level</option>
                                    <option value="user">User Password</option>
                                    <option value="superuser">Super User Password</option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">New Password</label>
                                <input required name="change-pass" type="password" class="form-control" id="exampleInputPassword1" required>
                            </div>

                            <input type="submit" name="change" value="Change" class="btn btn-primary mb-3" />
                        </form>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> -->
            </div>




            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->

<script>
    let upload = document.getElementById('nav-upload-tab');
    let change = document.getElementById('nav-change-tab');
    upload.addEventListener('click', () =>{
        upload.classList.add('active')
        change.classList.remove('active')
        document.getElementById('nav-change').classList.remove('my-show')
        document.getElementById('nav-change').classList.add('my-hide')

        document.getElementById('nav-upload').classList.add('my-show')
        document.getElementById('nav-upload').classList.remove('my-hide')
    })
    change.addEventListener('click', () =>{
        upload.classList.remove('active')
        change.classList.add('active')
        document.getElementById('nav-change').classList.add('my-show')
        document.getElementById('nav-change').classList.remove('my-hide')

        document.getElementById('nav-upload').classList.remove('my-show')
        document.getElementById('nav-upload').classList.add('my-hide')

    })
    
</script>

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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script> <!-- This is for dashboard costomizat-->
</body>

</html>