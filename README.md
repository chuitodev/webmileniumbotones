<p align="center"><a href="https://mileniumgasolineras.com/" target="_blank"><img src="https://mileniumgasolineras.com/wp-content/uploads/2021/09/milenium-bco.svg" width="400" alt="Milenium Combustibles Logo"></a></p>

## Database Setup
Create the following database:
- **Name**=mileniumcombustibles_web
- **Collation**=utf8mb4_unicode_ci

And use these values in the _.env_ file

## Environment Setup
Following variables must be created in _.env_ file
- **API_USER**='arduino'
- **API_PASSWORD**='LSE]RaF(Ngu9M6'

Change variables **APP_NAME** and **APP_URL** according to your local setup.

## Application Setup
`composer install`

`php artisan key:generate`

`php artisan migrate`
This command will create all tables needed.

`php artisan db:seed`
This command will create the admin user, see file _database/seeders/UserSeeder.php_


