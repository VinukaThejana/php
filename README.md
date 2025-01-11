# Dockerized PHP (batteries included)

Contarized PHP development environment with,
- PHP 8.0
- Nginx
- Postgres
- Redis
- Composer

This development environment is has proper routing implemented with Nginx and Symfony (only using the minimalist Symfony router).
Use contanerized PHP development environment without the overhead of using Laravel or Synfony (entierty).

## Prerequisites

- Docker
- Docker compose
- Just (https://github.com/casey/just) (just is command runner that is used to glue things together)

## Installation

```bash
cp ./app/.env.example ./app/.env
# (Remove the dummy values from the .env file and put proper values)

just run
# CTRL+C (stop the docker compose process)

just init

just run
```

## Usage

### Create a new route

- Create a new route method in `App/Src/Controller/[Group].php` here the group is the route group (e.g When you are building a `dashboard` route since it belongs to the `user` the group will be `User` and the route will be `dashboard`)

- Add the route view to `App/Public/routes/route` (this route can be a PHP file if you want server rendered content or it can be a completly static HTML file, also keep in mind that the `js` and `css` files that are relevant to this route can be added to the relevant `js` and `styles` directories in the `public` directory)

- Add the route to the `app/config/routes.yaml` file

### Create a new API route 

- Create a new route method in `App/Src/Controller/Api/[Group].php` here the group is the route group (e.g When you are building the `logout` functionality since it belongs to the `auth` category the group will be `Auth` and the route will be `logout`)

- Add the route to the `app/config/routes.yaml` file

### Install a new composer package

```bash
just install [package-name]
```
