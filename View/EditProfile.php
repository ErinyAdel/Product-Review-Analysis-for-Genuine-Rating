<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Edit Profile</title>
		<link rel="stylesheet" type="text/css" href="../Css/EditProfile.css">
	</head>
	<body>
		<!--Start Header -->
		<div class="header">
			<div class="Logo">
				<a href="index.php"><img src="../Pictures/photo.jpg" /></a>
                <h1>Edit Profile</h1>
			</div>	
		</div>
		<!--End Header-->
		<!--Start Form-->
		<div class="form">
			<form action="" method=''>
				<label class='label1'>New Username</label>
				<input class='text' type="text" name="username" required autocomplete="false" ><br>
				<label class='label2'>Old Password</label>
				<input class='text' type="password" name="password" required autocomplete="false"><br>
                <label class='label2'>New Password</label>
				<input class='text' type="password" name="password" id='pass' required autocomplete="false">
				<label class='label5' id='length'>Empty Password</label><br>
				<label class='label3'>New Email</label>
				<input class='text' type="Email" name="email" required><br>
				<input class='but1' type="submit" value="Submit" name='Save'> 
			</form>
		</div>
		<!--End Form-->
		<!--Start Footer-->
		<div class="footer">
            <h1>Follow Us About This Links</h1>
            <a href="https://www.YouTube.com"><img src="../Pictures/yt.svg" alt=""></a>
            <a href="https://www.Twiter.com"><img src="../Pictures/tw.svg" alt=""></a>
            <a href="https://www.Instagram.com"><img src="../Pictures/ins.svg" alt=""></a>
            <a href="https://www.Skype.com"><img src="../Pictures/skpe.svg" alt=""></a>
            <a href="https://www.Facebook.com"><img src="../Pictures/fb.svg" alt=""></a>
		</div>
		<!--End Footer-->
	</body>
	<script type="text/javascript">
		pass.addEventListener('keyup',function(){
			strength();
		})
		function strength(){
			var val=document.getElementById('pass').value;
			var status=document.getElementById('length') ;
			var counter=0 ;
			if(val!=""){
				if(val.length<=5)
					counter=1 ;
				if(val.length>5 && val.length<=10)
					counter=2 ;
				if(val.length>10 && val.length<=15)
					counter=3 ;
				
				if(counter==1){
					status.innerHTML="*Weak Password ";
					status.style.color="red";
				}
				if(counter==2){
					status.innerHTML="*Good Password";
					status.style.color="green";
				}
				if(counter==3){
					status.innerHTML="Strong Password";
					status.style.color="blue";
				}
			}else{
				status.innerHTML="Empty Password";
				status.style.color="red";
			}
		}
	</script>
</html>
