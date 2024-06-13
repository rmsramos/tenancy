# Filament Tenant Demo App

A demo application to illustrate how ActivityLog Filament works in tenant.

## Installation

Clone the repo locally:

```sh
git clone https://github.com/rmsramos/tenancy.git && cd tenancy
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate:fresh --seed
```

You're ready to go! Visit the url in your browser, and login with:

-   **Username:** admin@admin.com
-   **Password:** password
