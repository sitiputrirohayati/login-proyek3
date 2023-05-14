This repository contains a Laravel project that can be used as a starting point for web development. Below are the instructions to get started.

Getting Started
Prerequisites
PHP >= 7.4
Composer
Installation

## Clone the repository or download the source code as a ZIP file:

-   `git clone https://github.com/ricotaffarel/laravel.git laravel-multi-auth`

## Install dependencies:

`composer install`

## Create a copy of the .env.example file and rename it to .env:

`cp .env.example .env`

## Edit the .env file with your database credentials:

-   `DB_DATABASE=your_database_name`
-   `DB_USERNAME=your_database_username`
-   `DB_PASSWORD=your_database_password`

## Generate a new application key:

`php artisan key:generate`

## Run database migrations:

`php artisan migrate`

## Run database seeders:

`php artisan db:seed`

## Start the development server:

`php artisan serve`

## username and password:

-   admin
-   gmail = admin@gmail.com
-   password = password
-   dokter
-   gmail = dokter@gmail.com
-   password = password
-   pasien
-   gmail = pasien@gmail.com
-   password = password

# demo

-   ![alt text](https://github.com/ricotaffarel/laravel/blob/master/login-multi-user/image/login.png)
-   ![alt text](https://github.com/ricotaffarel/laravel/blob/master/login-multi-user/image/logout.png)
