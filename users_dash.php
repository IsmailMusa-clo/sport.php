<?php
include('include/linkDB.php');
include('include/dash_control.php');
session_start();
if ($_SESSION['admin_auth'] == "") {
    header("Location:admin_Log.php");
}
?>
<!DOCTYPE html>

<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>لوحة التحكم </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/admin.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index.php" class="nav-link">الصفحة الرئيسية</a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <span class="brand-text font-weight-light">لوحة التحكم</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="assets/images/logo.png" class="img-circle elevation-2" alt="">

                        </div>
                        <div class="info">
                            <a href="#" class="d-block">خالد </a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <li class="nav-item">
                                <a href="users_dash.php" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        الطلبة
                                        <span class="right badge badge-danger">جدید</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="coach_dash.php" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        المدربون
                                        <span class="right badge badge-danger">جدید</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="admin_logout.php" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        تسجيل الخروج
                                        <span class="fa fa-arrow-left"></span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">

            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-2 text-bold">جدول الطلبة </h5>
                                    <table class="table">
                                        <!-- ===>head table -->
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">اسم المشترك</th>
                                                <th scope="col">رقم الجوال</th>
                                                <th scope="col">حذف</th>
                                            </tr>
                                        </thead>
                                        <!-- ===>body table -->
                                        <tbody class="table-group-divider">
                                            <?php 
                            
                                                $sql="SELECT * FROM users";
                                                 $result = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                 $i=1;
                                                while($row = mysqli_fetch_assoc($result)) {
                                             ?>
                                            <th scope="row"><?=$i?></th>
                                            <td><?=$row['username']?></td>
                                            <td><?=$row['user_phone']?></td>
                                            <td><a href="delete.php?a=<?= $row['user_id']?>"> <i
                                                        class="fa fa-trash"></i></a></td>
                                                    </tr>
                                            <?php
                                                 $i++;
                                                 }
                                              }    
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline">
                    Anything you want
                </div>
                <!-- Default to the left -->
                <strong>CopyLeft &copy; 2022 .</strong>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="assets/js/adminlte.min.js"></script>
</body>

</html>