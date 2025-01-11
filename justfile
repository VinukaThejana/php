set dotenv-path := "./app/.env"

mod db
mod redis

init:
  docker exec php-fpm composer install --ignore-platform-reqs

install package:
  docker exec php-fpm composer require {{package}} --ignore-platform-reqs

run:
  docker compose up
