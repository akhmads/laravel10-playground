# Installation

Open terimal or command prompt and type below

```
git clone https://github.com/akhmads/laravel10-playground.git
cd laravel10-playground
composer install
npm install
npm run build
```

Copy file .env.example to .env file and setting your database account

```
...
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=postgres
DB_PASSWORD=YourPassword
...
```

Then run database migrate and run the server

```
php artisan key:generate
php artisan migrate
php artisan serve
```

Open the address http://127.0.0.1:8000 on your browser
