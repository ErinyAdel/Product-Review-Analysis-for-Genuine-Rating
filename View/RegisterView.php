<!DOCTYPE html>
<html>
<?php
include_once "../Controllers/registerationController.php";
?>
	<head>
		<meta charset="utf-8">
		<title>Register Form</title>
		<link rel="stylesheet" type="text/css" href="../Css/MyRegister.css">
	</head>
	<body>
		<!--Start Header -->
		<div class="header">
			<div class="Logo">
				<img src="../Pictures/logo.png" />
				<h1>Create New Account<h1>
			</div>
		</div>
		<!--End Header-->
		<!--Start Form-->
		<div class="form">
			<form action="" method='POST'>
				<label class='label1'>UserName</label>
				<input class='text' type="text" name="username" required autocomplete="false" ><br>
				<label class='label3'>Email</label>
				<input class='text' type="Email" name="email" required><br>
				<input class='checkbox' type="checkbox" name="checkbox" required>
				<label class='label4'>Accept Term Of Use</label><br>
				<input class='but1' type="submit" value="Submit" name='submit'>
			</form>
		</div>
		<!--End Form-->
		<!--Start Footer-->
		<div class="footer">
            <h1>Follow Us About This Links</h1>
            <a href="https://www.YouTube.com"><img src="../Pictures/MyYoutube.svg" alt=""></a>
            <a href="https://www.Twiter.com"><img src="../Pictures/MyTwitter.svg" alt=""></a>
            <a href="https://www.Instagram.com"><img src="../Pictures/MyInstagram.svg" alt=""></a>
            <a href="https://www.Skype.com"><img src="../Pictures/MySkype.svg" alt=""></a>
            <a href="https://www.Facebook.com"><img src="../Pictures/MyFacebook.svg" alt=""></a>
		</div>
		<!--End Footer-->
	</body>
	
</html>