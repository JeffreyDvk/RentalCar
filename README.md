git clone 
cd Gdp
composer install
cp .env.example .env
# Open .env for config like setting database name and url
php artisan key:generate
php artisan migrate
php artisan db:seed
composer require laravel/breeze --dev
php artisan breeze:install
# Seed multiple times to have some comments/messages with parents
npm install
npm run dev
php artisan serve