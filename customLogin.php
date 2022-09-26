<?php
include('include/linkDB.php');
include('include/server.php');
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <!-- style of page -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- start main section -->
    <main>
        <div class="form-main-container">
            <div class="form-wrapper">
                <!-- start form header  -->
                <div class="form-header">
                    <span class="form-title">
                        <strong>تسجيل الدخول </strong>
                    </span>
                </div>
                <!-- end form header -->
                <!-- start form -->
                <form class="form-content" action="" method="post">
                    <!-- start input  -->
                    <div class="input-wrapper">
                        <input class="input-style" type="text" name="username" placeholder="اسم المستخدم" required>
                        <span class="input-style-focus"></span>
                    </div>

                    <!-- start input -->
                    <div class="input-wrapper">
                        <div class="input-group">
                            <input class="form-control" name="password" type="password" placeholder="كلمة المرور"
                                id="password" required>
                            <span class="form-control-focus"></span>
                        </div>
                    </div>
                    <button name="log" class="button-style w-100">
                        تسجيل
                    </button>
                    <div class="checkbox-wrapper mt-4">
                        <a href="index.php" class="txt-style2">
                            <strong>هل نسيت كلمة المرور؟</strong>
                        </a>
                    </div>
                    <p class="txt-style1 mt-5">لم تسجل الدخول سابقا؟ <a class="txt-style2"
                            href="customReg.php"><strong>حساب
                                جديد!</strong></a>
                    </p>
                </form>
                <!-- end form -->
            </div>
        </div>
    </main>
    <!-- end main section -->

    <!-- js codes -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>