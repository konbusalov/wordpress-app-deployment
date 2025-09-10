#!/bin/bash
SECRET_MANAGER_SECRET_ID=$(cat .env | grep SECRET_MANAGER_SECRET_ID | cut -d '=' -f 2)
ENV=$(cat .env | grep ENV | cut -d '=' -f 2)

echo "Fetching secrets from AWS Secrets Manager..."

SECRETS_JSON=$(aws secretsmanager get-secret-value --secret-id "$SECRET_MANAGER_SECRET_ID" --query SecretString --output text)

if [ -z "$SECRETS_JSON" ]; then
    echo "Error: Could not retrieve secret from AWS Secrets Manager."
    exit 1
fi

export MYSQL_USER=$(echo "$SECRETS_JSON" | jq -r '.MYSQL_USER')
export MYSQL_PASSWORD=$(echo "$SECRETS_JSON" | jq -r '.MYSQL_PASSWORD')
export MYSQL_ROOT_PASSWORD=$(echo "$SECRETS_JSON" | jq -r '.MYSQL_ROOT_PASSWORD')
export MYSQL_DATABASE=$(echo "$SECRETS_JSON" | jq -r '.MYSQL_DATABASE')


echo "Secrets exported. Starting Docker Compose..."

docker-compose -f ./docker-compose-$ENV.yml down
docker system prune -a -f --filter "label!=keep=true"
docker-compose -f ./docker-compose-$ENV.yml up -d

#Remove Secrets from Environment
unset MYSQL_USER
unset MYSQL_PASSWORD
unset MYSQL_DATABASE
unset MYSQL_ROOT_PASSWORD


