## [Building a Laravel 10 Application with Vue 3](https://laraveltuts.com/building-a-laravel-10-application-with-vue-3-complete-guide-to-crud-operations/)

1.  create a new Laravel project via Composer:
```
composer create-project laravel/laravel l10-ui-vue3-crud
```
2.  Install the frontend scaffolding using the `laravel/ui` with `bootstrap 5.2` and `vue3`
```
composer require laravel/ui
php artisan ui vue --auth
npm install
npm run build
```
3. Install the `vue-router` package and create simple SPA
```
npm install vue-router
```
4.  Создание модели, миграции для таблицы, фабрики для наполнения данными и api контроллера для сущности `Product`. Implementing CRUD Operations in the API and test with Postman.
```
php artisan make:model Product -mf
php artisan migrate --seed
php artisan make:controller ProductController --api
```
5.  Implementing CRUD Operations in SPA Vue 3.
