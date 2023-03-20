## Installation
1. Clone this repository
2. Run `composer install`
3. Run `cp .env.example .env` for terminal or linux / Run `copy .env.example .env` for windows
4. Open your .env file and change the database name (`DB_DATABASE`) to whatever you have, username (`DB_USERNAME`) and password (`DB_PASSWORD`) field correspond to your configuration.
3. Run `php artisan key:generate`
4. Run `php artisan migrate:fresh --seed`
5. Run `php artisan serve`
