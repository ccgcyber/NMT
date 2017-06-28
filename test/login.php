<?php
include('validater.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location:home.php");
}
?>
<html >
  <head>
    <title>Login</title>
 <style>
body{	
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-color:#000;
	z-index: 0;
}



.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 400px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 2000;
}

.header div span{
        float:left;
        font-size:25px;
        font-family:'Exo', sans-serif;
	color: #fff ;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	-moz-transition: all 0.35s ease-in-out;
               	-webkit-transition: all 0.35s ease-in-out;
		-o-transition: all 0.35s ease-in-out;
		-ms-transition: all 0.35s ease-in-out;
		transition: all 0.35s ease-in-out;
		box-shadow: 0 0 2px 1px #E0E0E0;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
	-moz-transition: all 0.35s ease-in-out;
		-webkit-transition: all 0.35s ease-in-out;
		-o-transition: all 0.35s ease-in-out;
		-ms-transition: all 0.35s ease-in-out;
		transition: all 0.35s ease-in-out;
		box-shadow: 0 0 2px 1px #E0E0E0;
}

button{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #000;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;

}

button:hover{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
	background:black;
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
	background:black;
}

button:focus{
	outline: none;
	background:#fff;
}

::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}
    </style>
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


