<?php
include('session.php');
?>
<html>
<head>
<title>Welcome</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="header" class="container">
                <div id="logo">
                        <h1>NMT</h1>
                        <span>Welcome</span> </div>
                <div id="menu">
                        <ul>
                              <li><a href="logout.php" accesskey="2" title=""><font size=4>LOGOUT</font></a></li>
                                <!--<li><a href="ipv6.php" accesskey="3" title=""><font size=4>IPv6</font></a></li>-->
                        </ul>
                </div>
</div>
<div id="wrapper3" align="center">
				<a href="ip4.php" class="button button-small">IPv4</a><br>
				<a href="ip6.php" class="button button-small">IPv6</a><br>
                             <!--   <a href="recons.php" class="button button-small">Reconstruction</a><br>-->
</div>
</body>
</html>

