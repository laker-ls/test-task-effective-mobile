<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Для запуска проекта необходимо выполнить следующие шаги:

1. Выполнить команды:
   ```bash
   npm install && npm run build && composer install
    ```
2. Скопировать файл `.env.example` в `.env`:
   ```bash
   cp .env.example .env
   ```
   Затем отредактировать `.env` файл, указав правильные значения для
`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` и `DB_PASSWORD`.

3. Выполнить миграции для создания таблиц в базе данных:
   ```bash
   php artisan migrate
   ```
4. Запустить проект локально:
   ```bash
   php artisan serve
   ```