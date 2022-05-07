<?php 
//paramètres d'accéer au serveur base de données MySQL    
require "config.php";

if (isset($_POST['submit1'])) {
	$username = $_POST['user'];
	$password = ($_POST['pass']);
	$cpassword = ($_POST['pass2']);
    


	if ($password == $cpassword) {
		$sql = "SELECT * FROM comptes WHERE user='$username'";
		$result = mysqli_query($mysqli, $sql);
		if (!mysqli_num_rows($result) > 0) {
			$sql = "INSERT INTO comptes (user, passwd)
					VALUES ('$username','$password')";
			$result = mysqli_query($mysqli, $sql);
			if ($result) {
				
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				echo "<script type='text/javascript'> document.location ='index.html'; </script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! username Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}


?>
<!DOCTYPE html>
<!-- saved from url=(0047)https://colorlib.com/etc/lf/Login_v1/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration </title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v1/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./Login V1_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Login V1_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Login V1_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Login V1_files/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./Login V1_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Login V1_files/util.css">
<link rel="stylesheet" type="text/css" href="./Login V1_files/main.css">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./Login V1_files/analytics.js.télécharger"></script><script defer="" src="./Login V1_files/s.js.télécharger"></script><script>(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];a.zarazData.c=e.cookie,s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),//
a.dataLayer=a.dataLayer||[],a.zaraz._preTrack=[],a.zaraz.track=(e,t)=>a.zaraz._preTrack.push([e,t]),a.dataLayer.push({"zaraz.start":(new Date).getTime()});var n=e.getElementsByTagName(r)[0],i=e.createElement(r);i.defer=!0,i.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),n.parentNode.insertBefore(i,n)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt="" style="transform: perspective(300px) rotateX(0deg) rotateY(0deg); will-change: transform;">
<img src="./Login V1_files/img-01.webp" alt="IMG">
</div>
<form class="login100-form validate-form" action="" method="post">
<span class="login100-form-title">
Member Registration
</span>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="user" placeholder="Saisir le nom d'utilisateur">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="pass" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="pass2" placeholder="Confirm Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn" name="submit1">
Sign Up
</button>
</div>
<div class="text-center p-t-12">
	
	<a class="txt2" href="index.html">
		Go Back
	</a>
</div>

</div>

<script src="./Login V1_files/jquery-3.2.1.min.js.télécharger"></script>

<script src="./Login V1_files/popper.js.télécharger"></script>
<script src="./Login V1_files/bootstrap.min.js.télécharger"></script>

<script src="./Login V1_files/select2.min.js.télécharger"></script>

<script src="./Login V1_files/tilt.jquery.min.js.télécharger"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async="" src="./Login V1_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="./Login V1_files/main.js.télécharger"></script>
<script defer="" src="./Login V1_files/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;6d0133ed6e683682&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</body></html>