<html>
<head>
	<meta http-equiv="Content-Language" content="tr">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9">
	<title>Lama Garage</title>

    <!-- Bootstrap -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="./../img/lama-baslık.png" type="image/x-icon">

    <!-- main css -->
    <link href="./../css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="./../js/modernizr.js"></script>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div class="pre-container">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- end Preloader -->

<div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="./../index.html"><img src="./../img/grglogo.png" width="140" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">İLETİŞİM</li>

                <li><a href="./../index.html">Anasayfa</a></li>
                <li><a href="./../about.html">Hakkımızda</a></li>
                <li><a href="./../services.html">Hizmetlerimiz</a></li>
                <!-- <li><a href="./../portfolio.html">Portfolyo</a></li> -->
                <li><a href="./../iletisim.php">İletişim</a> <i class="ion-ios-circle-filled color"></i></li>



                <li class="box-label">Follow me</li>

                <li class="box-social"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="#0"><i class="ion-social-dribbble"></i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>İLETİŞİM</h1>
        <p><a href="./../index.html">Anasayfa</a></p>
    </div>
    <!-- end top bar -->


    <!-- burası orj form başlangıç -->
    <div class="container main-container">
        <div class="col-md-6">
            <form action="iletisim.php?islem" method="post">
            <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input  type="text" name="isim">
                            <span>your name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="eposta">
                            <span>your email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="konu">
                            <span>object</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="mesaj"></textarea>
                            <span>message</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p><input type="reset" value="Sıfırla" class="btn btn-box" /> <input type="submit" value="Gönder" class="btn btn-box" /></p> 
                        <!-- Burası orj form btiş -->
                    </div>
                    </div>
<?php

if (isset($_GET['islem'])) {
	
	if ($_POST['eposta']<>'' && $_POST['isim']<>'' && $_POST['konu']<>'' && $_POST['mesaj']<>'') {

	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "mail.lamagarage.com";
	$mail->SMTPAuth = true;
	$mail->Username = "robot@lamagarage.com";
	$mail->Password = "yIt7(uCc2)";
	$mail->From = "info@lamagarage.com";
	$mail->Fromname = $_POST['isim'];
	$mail->AddAddress("info@lamagarage.com","Mail gönderimi");
	$mail->Subject = $_POST['konu'] . $_POST['eposta'];
	$mail->Body = $_POST['mesaj'];

	if(!$mail->Send())
	{
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	echo '<font color="#41A317"><b>Mesaj başarıyla gönderildi.</b></font>';
	} else {
		 echo '<font color="#F62217"><b>Tüm alanların doldurulması zorunludur.</b></font>';
	}
}
?>
</form>
</div>

<div class="col-md-6">
    <h3 class="text-uppercase">BİZE ULAŞIN</h3>
    <h5>İsterseniz yazın, isterseniz arayın, isterseniz de çıkın gelin.</h5>
    <div class="h-30"></div>
    <p>Barbaros Mahallesi Begonya sokak No:1/2 34746 NİDA KULE Ataşehir/İSTANBUL</p>
    <div class="contact-info">
        <p><i class="ion-android-call"></i>+90 533 617 82 23</p>
        <p><i class="ion-ios-email"></i> info@lamagarage.com</p>
    </div>
</div>


</div>



    <!-- jQuery -->
    <script src="./../js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="./../js/bootstrap.min.js"></script>
    <script src="./../js/menu.js"></script>
    <script src="./../js/animated-headline.js"></script>
    <script src="./../js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="./../js/custom.js"></script>
</fieldset>
</body>
</html>
