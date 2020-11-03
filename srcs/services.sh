apt-get update
apt-get install -y nginx vim wget unzip dpkg lsb-release php-mysql gnupg php7.3-fpm php-mbstring
rm -rf /etc/nginx/sites-available/default
cp -f /default /etc/nginx/sites-available/
#ssl
apt-get install -y openssl
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=MO/ST=CA/L=Casablanca/O=1337/CN=localhost' -keyout ./etc/nginx/certif.key -out ./etc/nginx/certif.pem

#mysql
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start

#phpmyadmin
cd /var/www/html
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.zip
unzip *.zip
rm -rf *.zip
mv phpMyAdmin-5.0.4-all-languages  phpmyadmin
rm -f /var/www/html/phpmyadmin/config.sample.inc.php
cp -f /config.inc.php /var/www/html/phpmyadmin/
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp

#DATABASE
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'mhalli'@'localhost' IDENTIFIED BY 'mhalli';";
mysql --password=mhalli --user=mhalli -e "CREATE DATABASE wordpress;";
mysql --password=mhalli --user=mhalli -e "FLUSH PRIVILEGES;";
mysql --password=mhalli --user=mhalli wordpress < /wordpress.sql

#wordpress
cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip latest.zip
rm latest.zip
cd wordpress/
rm -f wp-config-sample.php
cp /wp-config.php /var/www/html/wordpress/
