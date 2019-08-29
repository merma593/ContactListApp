#get server updates

apt-get update
export MYSQL_PWD="mypassword"

echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections 
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections

#install mySQL database
apt-get -y install mysql-server

echo "CREATE DATABASE contactdb;" | mysql

echo "CREATE USER 'dbuser'@'%' IDENTIFIED BY 'mypassword';" | mysql

echo "GRANT ALL PRIVILEGES ON contactdb.* TO 'dbuser'@'%'" | mysql

export MYSQL_PWD='mypassword'

#add webuser and contactdb
cat /vagrant/dbsetup.sql | mysql -u webuser contactdb

#allow public connections
sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf

#restart
service mysql restart
