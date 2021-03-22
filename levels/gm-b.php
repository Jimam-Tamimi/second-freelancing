<?php
require '../partials/_db-connect.php';
$title = 'GM B'

?>
<!DOCTYPE html>
<html lang="en">

<head>

<?php

include '../partials/_head.php';

?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        
        include '../partials/_nav.php';
        include '../partials/_slidebar.php';
        
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-top: 57px;" class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php
            
            include '../partials/_content-header.php';

            $level = 'level_10';

            
            require '../partials/_main.php';
            
            ?>


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