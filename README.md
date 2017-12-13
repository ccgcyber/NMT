<h1>NETWORK MONITORING AND ANALYSIS TOOL</h1>
	
Steps to install (only for ubuntu):
<ol>
<li> Install LAMP on your system using following commands<br>
	apache: sudo apt-get install apache2<br>
	MySQL : sudo apt-get install mysql-server php5-mysql<br>
	PHP   : sudo apt-get install php5 libapache2-mod-php5 php5-mycrypt<br>
<br>
</li>
<li>Copy the test folder to /var/www/html<br>
<br>
</li>
<li>Change the ownership of html and test folder from root to www-data<br>
	html  : chown -R www-data:www-data /var/www/html<br>
	test  :	chown -R www-data:www-data /var/www/html/test<br>
<br>
</li>
<li>Change persmissions of the shellipv4.sh and shellipv6.sh file<br>
	(make sure you're currently in the test folder)<br>
	ipv4  : chmod 755 shellipv4.sh<br>
	ipv6  : chmod 755 shellipv6.sh<br>
<br>
</li>
<li>Open web browser and type localhost/test/login.php in the address bar.<br>
<br>
</li>
</ol>
(You're good to go) 
