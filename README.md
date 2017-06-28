NETWORK MONITORING AND ANALYSIS TOOL
	(only for ubuntu)
Steps to install:
1. Install LAMP on your system using following commands
	apache: sudo apt-get install apache2
	MySQL : sudo apt-get install mysql-server php5-mysql
	PHP   : sudo apt-get install php5 libapache2-mod-php5 php5-mycrypt

2. Copy the test folder to /var/www/html

3. Change the ownership of html and test folder from root to www-data
	html  : chown -R www-data:www-data /var/www/html
	test  :	chown -R www-data:www-data /var/www/html/test

4. Change persmissions of the shellipv4.sh and shellipv6.sh file
	(make sure you're currently in the test folder)
	ipv4  : chmod 755 shellipv4.sh
	ipv6  : chmod 755 shellipv6.sh

5.Open web browser and type localhost/test/login.php in the address bar.

(You're good to go) 