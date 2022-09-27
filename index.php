<?php
include('include/linkDB.php');
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>

    <!-- style of page -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- start header section -->
    <header style="background-image:url(assets/images/hed_bac.jpg) ; ">
        <div class="over">
            <!-- start navbar section -->
            <nav class="NAVBAR container">
                <div class="right">
                    <span class="container-image-nav">
                        <a href="index.php"> <img class="img-nav" src="assets/images/logo.png" alt=""
                                title="الموقع الرياضي"> </a>
                    </span>
                    <ul>
                        <li class="nav-item"> <a href="#">الصفحة الرئيسية</a></li>
                        <li class="nav-item"> <a href="#sports">الرياضات</a></li>
                        <li class="nav-item"> <a href="coach.php">المدربون</a></li>
                        <li class="nav-item"> <a href="dashboard.php">لوحة التحكم</a></li>
                        <li class="nav-item"> <a href="#contact">تواصل معنا</a></li>
                    </ul>
                </div>
                <a href="users.php">تسجيل الدخول</a>
                <a href="" class="bar"><i class="fa fa-bars"> </i></a>
            </nav>
            <div class="nav-toggle">
                <ul>
                    <li class="nav-item"> <a href="#">الصفحة الرئيسية</a></li>
                    <li class="nav-item"> <a href="#sports">الرياضات</a></li>
                    <li class="nav-item"> <a href="coach.php">المدربون</a></li>
                    <li class="nav-item"> <a href="dashboard.php">لوحة التحكم</a></li>
                    <li class="nav-item"> <a href="#contact">تواصل معنا</a></li>
                </ul>
                <a class="bt-togg" href="users.php">تسجيل الدخول</a>
            </div>
            <!-- end navbar section -->
            <!-- start main text  -->
            <section class="registration">
                <div class="container">
                    <div class="content">
                        <div class="registration1">
                            <h3>أهلاً وسهلاً بكم</h3>
                            <p>شارك في الرياضــات المختلفة مع مدربــين أكفاء</p>
                            <a href="users.php">تسجيل الدخول</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main text -->

        </div>
    </header>
    <!-- end header section -->

    <!-- start main section -->
    <main>
        <!-- Start section sports -->
        <section id="sports" class="sports pad-sec">
            <div class="container">
                <div class="content">
                    <h3>الرياضــات</h3>
                    <div class="boxes">
                        <div class="box">
                            <img src="assets/images/sports/football.jpg" alt="">
                            <div class="text">
                                <h3>احترف كرة القدم</h3>
                            </div>
                        </div>
                        <div class="box">
                            <img src="assets/images/sports/Basketball.jpg" alt="">
                            <div class="text">
                                <h3>احترف كرة السلة</h3>
                            </div>
                        </div>
                        <div class="box">
                            <img src="assets/images/sports/billiard.jpg" alt="">
                            <div class="text">
                                <h3>احترف البيلياردو</h3>
                            </div>
                        </div>
                        <div class="box">
                            <img src="assets/images/sports/swimming.jpg" alt="">
                            <div class="text">
                                <h3>احترف السباحة</h3>
                            </div>
                        </div>
                        <div class="box">
                            <img src="assets/images/sports/Tennis.jpg" alt="">
                            <div class="text">
                                <h3>احترف التنس</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End section sports -->
    </main>
    <!-- end miain section -->
    <!--  Start section Connect us -->
    <section id="contact" class="ConnectUs" style="background-image: url('assets/images/footer-bg.jpeg')">
        <div class="container">
            <div class="content">
                <div class="connect">
                    <a href="index.php" class="brand"><img src="assets/images/logo.png" alt=""></a>
                    <p><span>
                            <i class="fa fa-map-marker"></i>
                        </span>
                        السعودية ، الرياض ، عمارة الحسن ، الطابق الثالث.
                    </p>
                    <p><span>
                            <i class="fa fa-phone"></i>
                        </span>
                        +966 53 301 9651
                    </p>
                    <p><span>
                            <i class="fa fa-whatsapp"></i>
                        </span>
                        +966 53 301 9651
                    </p>
                    <a href="#"><span>
                            <i class="fa fa-envelope"></i>
                        </span>
                        khaled@gmail.com
                    </a>
                </div>
                <div class="links">
                    <h5>الرياضــات</h5>
                    <a href="#"> ▸ كرة القدم</a>
                    <a href="#"> ▸ كرة سـلة</a>
                    <a href="#"> ▸ بيلياردو</a>
                    <a href="#"> ▸ السبـاحة</a>
                    <a href="#"> ▸ تنـس</a>
                </div>
                <div class="around">
                    <h5>حول الموقع الرياضي</h5>
                    <p>يمكن ممارسة الرياضة من أجل الفوائد الشخصية، وكذلك الفوائد المهنية؛ وفي كلا الاتجاهين، تفيد
                        الجسم والعقل والروح.


                        بعض الناس يلعبونها يوميًا من أجل اللياقة البدنية والعقل، والاستمتاع، وما إلى ذلك، ولكنْ
                        البعض يلعبها للحصول على مكانة قيّمة في حياتهم، ولا يمكن لأحد أن يتجاهل قيمه في الحياة
                        الشخصية والمهنية. </p>
                </div>
            </div>
        </div>
    </section>
    <!--  End section Connect us -->
    <footer>
        <p>&#xA9 جميع الحقوق محفوظة لدى</p>
        <a href="">.KH</a>
    </footer>
    <!-- js code -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>