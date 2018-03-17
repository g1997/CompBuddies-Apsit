<html >
<?php include('background.html');?>
<div align="center">
<link href="background.css" type="text/css" rel="stylesheet">
<body ">
<div align="center">
<h1>USER LOGIN </h1>
</div>
<form role="form" method="post">
<div>
Enter mobile no.
<input type="text" name="emailid" required autocomplete="off" />
</div>
<div>
Password
<input  type="password" name="password" required autocomplete="off"  />
</div>
<div >
Verification code : 
<input type="text"  name="vercode" maxlength="5" autocomplete="off" required  style="height:25px;" />&nbsp;
<br><img src="captcha.php">
</div> 
<button type="submit" name="login" class="btn btn-info">LOGIN </button> | <a href="signup.php">Not Register Yet</a>
<div>
<p><a href="user-forgot-password.php">Forgot Password</a></p>
</div>
</form>
</html>