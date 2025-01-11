set dotenv-path := "./app/.env"

connect:
  iredis --url $(echo $REDIS_URL)

