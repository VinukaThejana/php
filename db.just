set dotenv-path := "./app/.env"

connect:
  usql $(echo $DB_URL)

migrate file:
  usql $(echo $DB_URL) -f {{file}}
