# Egyptus Travel Booking Demo

# Installation

1. clone the repo
```
$ git clone https://github.com/AmrMonier/egyptus.git
```

2. enter the project directory
```
$ cd egyptus
```

3. we need to install all the dependencies
```
$ composer install
```
4. we need to copy the .env.example file to a .env file

5. step add the your enviroment configuration
   
   copy these variables and assign their values depending on your enviroment
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=


MAIL_MAILER=smtp
# MAIL_DRIVER=smtp # for laravel < 7
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
MAIL_FROM_NAME="Amr Monier"
MAIL_FROM_ADDRESS=
```

6. generate the app key
```
$ php artisan key:generate
```
7. migrate the database
```
$ php artisan migrate --seed
```
now we have a database with 30 trip and 10 users
8. run the development server
```
$ php artisan serve
```
