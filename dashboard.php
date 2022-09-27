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
                            <img src="assets/images/logo.png"
                                class="img-circle elevation-2" alt="">

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
                                    <h5 class="card-title mb-2 text-bold">إضافة رياضة</h5>

                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">نوع الرياضة</label>
                                            <input type="text" class="form-control" name="sport_type" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">رابط التيلجرام</label>
                                            <input type="text" class="form-control" name="telgram">
                                        </div>
                                        <button type="submit" name="add_sport" class="btn btn-success">إضافة</button>
                                    </form>

                                  </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-2 text-bold">إضافة مدرب</h5>

                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">اسم المدرب</label>
                                            <input type="text" name="c_name" class="form-control" id="name" >
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">نوع الرياضة </label>
                                            <input type="text" name="sport" class="form-control" id="sport_type">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">كلمة المرور</label>
                                            <input type="password" name="password" class="form-control" id="password">
                                        </div>
                                        <button type="submit" name="add_coach" class="btn btn-success">إضافة</button>
                                    </form>

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