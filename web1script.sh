apt-get update
apt-get install -y apache2 php libapache2-mod-php php-mysql

#change VM webserver config to shared folder
cp /vagrant/assign-site.conf /etc/apache2/sites-available/

#activate website config
a2ensite assign-site

#disable default website
a2dissite 000-default

#reload web config
service apache2 reload
