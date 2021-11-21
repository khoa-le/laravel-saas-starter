<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About Laravel SaaS Starter

Laravel SaaS Starter is a kit that is standing on the shoulders of giants. You can build your multi-tenant SaaS quickly.

- [Laravel Framework](https://laravel.com)
- [Laravel Nova](https://nova.laravel.com/) (need to purchase licenses)
- [Tenancy For Laravel](https://tenancyforlaravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)

Laravel Packages:
- [Laravel Mix](https://laravel.com/docs/8.x/mix)
- [Laravel Cashier (Stripe)](https://laravel.com/docs/8.x/billing)
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).


## Installation

Clone source code from repository

Run composer install packages
```bash
composer install
```

Copy .env.example to .env and set up database connection (your mysql database user should have creating database's permission)

Run data migration
```bash
php artisan migrate
```
