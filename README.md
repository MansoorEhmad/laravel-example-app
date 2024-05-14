# laravel-example-app
laravel example app 
### Installation
    Clone the repository: `git clone https://github.com/MansoorEhmad/laravel-example-app.git`
    
    Install dependencies: `composer install`
    
    Create Database in mysql eg `laravel-example-app`
    
    In `.env` file add enviroment variables.
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel-ar-app
        DB_USERNAME=khalid `user name of mysql`
        DB_PASSWORD=kh4A23Mansoor `password`
        
    Migrate the database: `php artisan migrate`
### Usage
    To start the development server: `php artisan serve`