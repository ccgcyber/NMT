<?php
include('validater.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location:home.php");
}
?>
<html >
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>

  <body>

    <div class="body"></div>
		<div class="header">
			<div>NMT</div><br>
                        <div><span> Created by Akshit Jindal</span></div>
		</div>
		<br>
	        <div class="login">
		   <form action="" method="post">
			<input type="text" placeholder="username" name="username"><br>
			<input type="password" placeholder="password" name="password"><br>
			<button type="submit" name='submit' value="Login">LOGIN</button>
         	   </form>
		</div>
<div id="wrapper3" align="center">
<?php echo "<h2>$error</h2>"; ?>
</div>
</body>
</html>


