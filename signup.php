<html>
<head>
	<title>Sign UP</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.container{
			width: 40%;
			height: 80%;
			border: 1px solid black;
			padding-top: 20px;
			margin-top: 40px;
			border-radius: 5px;
			background-color: #d8d8d8;
		}
		form{
			padding-top: 30px;
		}
		.instead{
			text-align: left;
			margin-top: 66px;
			padding-top: 66px;
			margin-left: 15px;
		}
		.butn{
			width: 85px;
			text-align: right;
			margin-top: 60px;
			padding-top: 60px;
			margin-right: 10px;
		}
		
	</style>
</head>
<body>
	<center>
	<img src="logo.gif" width="170" height="60" />
	<div class="container">
		<h3>Create your MailBox Account</h3>
		<form action="" method="POST">
			<div class="row">
			    <div class="col">
			      <input type="text" class="form-control" placeholder="First name" name="fname" required>
			    </div>
			    <div class="col">
			      <input type="text" class="form-control" placeholder="Last name" required>
			    </div>
			</div>
			
			<input type="text" class="form-control " placeholder="Username" style="margin-top:14px;" required>
			

			<div class="row"  style="margin-top:14px;">
			    <div class="col">
			      <input type="password" class="form-control" placeholder="Password" name="fname" required>
			    </div>
			    <div class="col">
			      <input type="password" class="form-control" placeholder="Confirm" id="password-field" required>
			    </div>
			    <span style="padding-left:25px; color:#706969;">Use 4 or more characters with a mix of letters, numbers & symbols</span>
			    
			</div>
			<input type="numbers" class="form-control " placeholder="Contact" style="margin-top:14px;" required>
			<input type="date" class="form-control " placeholder="DOB" style="margin-top:14px;" required>
			<div class="row">
				<div class="instead col"><a href="index.html" >Sign in Instead?</a></div>
			
				<div class="butn">
				<input type="submit" value="  Next  " class="btn btn-primary col "></div>
			</div>	

			
		</form>
	</div>	
	</center>
</body>
</html>










