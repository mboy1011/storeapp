<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation
> Deploy StoreApp in a Web Server (Ubuntu)
1. Install Apache Web Server
    -   <code>sudo apt install apache2 -y</code>
    -   Start Apache2 service: <code>sudo service apache2 start</code>
2. Install PHP and Dependencies
    -   <code>sudo apt install php libapache2-mod-php php-mbstring php-xmlrpc php-soap php-gd php-xml php-cli php-zip php-bcmath php-tokenizer php-json php-pear php-curl php-mysql</code>
    -   Enable MySQL PDO PHP Extention by uncommenting: <code>extension=pdo_mysql</code> in <i>/etc/apache2/7.4/apache2/php.ini</i> by removing <b>;</b>
3. Install MySQL Database Server
    -   <code>sudo apt install mysql-server -y</code>
    -   Start MySQL service: <code>sudo service mysql start</code>
    -   Run: <code>mysql_secure_connection</code>
        -   Remove anonymous users? [Y/n] y
        -   Disallow root login remotely? [Y/n] n
        -   Remove test database and access to it? [Y/n] y
        -   Reload privilege tables now? [Y/n] y
    -   Login to MySQL using root: <code>sudo mysql -u root</code>
    -   Create an <b>admin</b> user to localhost/127.0.0.1 database together with the password: <code>ALTER USER 'admin'@'localhost' IDENTIFIED BY 'Admin_2k21'</code>
    -   Grant ALL permission to <b>admin</b> user: <code>GRANT ALL ON *.* TO 'admin'@'localhost';</code>
    -   Save changes to database without reloading or restart mysql service: <code>FLUSH PRIVILEGES;</code>
4. Install Composer PHP Dependency Manager
    -   <code>curl -sS https://getcomposer.org/installer | php</code>
    -   <code>sudo mv composer.phar /usr/local/bin/composer</code>
    -   <code>sudo chmod +x /usr/local/bin/composer</code>
5. Clone StoreApp then move to Apache web root
    -   <code>git clone https://github.com/mboy1011/storeapp</code>
    -   <code>sudo mv storeapp /var/www/html/</code>
    -   Change the permission to apache's web server user 
        -   <code>sudo chgrp -R www-data /var/www/html/storeapp/</code>
        -   <code>sudo chmod -R 775 /var/www/html/storeapp/storage</code>
6. Create a new Virtual Host for StoreApp:
    -   Go to <b>site-available</b> directory: <code>cd /etc/apache2/sites-available</code>
    -   Create a <b><i>storeapp.conf</i></b>: <code>sudo vim storeapp.conf</code>
    -   Add the following code to `storeapp.conf`:
    ```apache
        <VirtualHost *:80>
            ServerName 172.31.208.196
            ServerAdmin webmaster@172.31.208.196
            DocumentRoot /var/www/html/storeapp/public
            <Directory /var/www/html/storeapp>
                AllowOverride All
            </Directory>
            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined
        </VirtualHost>
    ```
    -   Disable default config file for virtual host: <code>sudo a2dissite 000-default.conf</code>
    -   Enable our newly created virtual host: <code>sudo a2ensite storeapp</code>
    -   Enable Apache's <b>rewrite</b> module: <code>sudo a2enmod rewrite</code>
    -   Restart Apache Service: <code>sudo service apache2 restart</code>


## Using StoreApp for Local Development
> <code>php artisan serve --host=[IP] --port=[port]</code>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
