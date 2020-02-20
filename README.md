# TaxidriversCorp Website

An HabanaTech project

TaxidriversCorp Website is currently in development using 
[Symfony Framework 5](http://www.symfony.com) and Webpack.


## How to

1. Clone this repository
2. run ```composer install```
3. run ``npm install``
4. Create a database
5. Create you own Environment in ``.env.local`` and set your database configuration using: 
**DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7**
6. For update the database schema run ``php bin/console make:migration`` and 
``php bin/console doctrine:migrations:migrate``
7. Build assets, run ``npm run build``

## Runing on Local
1. Use the [Symfony Client](https://symfony.com/download) or [run a local php server](https://www.php.net/manual/es/features.commandline.webserver.php) at public folder.

## Deploy

1. Make sure that in ``.env`` file or ``.env.local`` at production (server) the variable ``ENV`` is set to ``PROD``
2. There is a file in ``/public/git-deploy/deploy.php`` will be trigger
when a commit in master happen using GitHub Webhook.

