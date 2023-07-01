# LaravelSpatieRolePermissionAdminPanel



### Installation
- clone the repository:

- install PHP dependencies via [composer](https://getcomposer.org/):
```
composer install
```
- install js dependencies via [npm](https://nodejs.org/en/):
```
npm install
```
- compile js & css assets:
```
npm run dev
```
- copy .env.example file & create a new .env file using terminal:
```
cp .env.example .env
```
- generate an application key:
```
php artisan key:generate
```
- set project configurations in .env file
- create a MySQL database
- create tables in database with default data:
```
php artisan migrate --seed
```
command to use run the application in localhost
```
php artisan serve
```

