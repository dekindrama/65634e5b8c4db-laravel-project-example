## About Project

this project develop using Laravel Framework. this project created only for learning purpose.

## Run Project

```bash
# install all needed package from composer
composer install

# install all needed package from npm
npm install

# make .env file
cp .env.example .env

# migrate database
# make sure you already set your database connection correctly on .env file
php artisan migrate:refresh --seed

# run additional dev pakage from npm
npm run dev

# run laravel project
php artisan serve
```

## Build Project

```bash
# build production ready css and js using npm
npm run build
```

## Open Project from browser

after run the project, you can open the system from browser. you can visit [http://localhost:8000](http://localhost:8000).

to login the system, you can use this account

```
email: test@example.com
password: password
```
