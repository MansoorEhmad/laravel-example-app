# laravel-example-app
laravel example app 
### Installation
    Clone the repository: `git clone https://github.com/MansoorEhmad/laravel-example-app.git`
    
    Install dependencies: `composer install`
    
    Create Database in mysql eg `laravel-example-app`
    
    Copy `.env.example` to `.env` and configure your environment variables.
    In `.env` file uncomment these lines & add enviroment variables.
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel-example-app
        DB_USERNAME=user `user name of mysql`
        DB_PASSWORD=password `password`
        
    Generate application key: `php artisan key:generate`
        
    Migrate the database: `php artisan migrate`
### Usage
    To start the development server: `php artisan serve`