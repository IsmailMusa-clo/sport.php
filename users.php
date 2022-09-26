<?php
include('include/linkDB.php');
include('include/sess.php');
include('include/auth.php');
 $s_n=$_SESSION['sport'];
$telgram="";
$sql = "SELECT * FROM sports WHERE sport_name='$s_n'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// echo $row['sport_telgram'];
  if (isset($row)){
 $telgram =$row['sport_telgram'] ;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المستخدم</title>

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
                        <a href="index.php"> <img class="img-nav" src="assets/images/logo.png" alt=""> </a>
                    </span>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-light"><?=$_SESSION["name"]?></button>
                    <button type="button" class="btn btn-light  dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item"><?=$_SESSION["sport"]?></a>
                        <a href="<?=$telgram?>" target="_blank" class="dropdown-item">قناة التيلجرام</a>
                        <div class="dropdown-divider"></div>
                        <a href="include/logout.php" class="dropdown-item">تسجيل الخروج</a>
                    </div>
                </div>
            </nav>
            <!-- end navbar section -->
            <!-- start main text  -->
            <section class="registration">
                <div class="container">
                    <div class="content">
                        <div class="registration1">
                            <h1><?=$_SESSION["name"]?></h1>
                            <p><?=$_SESSION["sport"]?> <a href="<?=$telgram?>">تيلجرام</a></p>
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
        <a href="#">.KH</a>
    </footer>
    <!-- js code -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>