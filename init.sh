#!/bin/bash

FILE_DOCKER="docker-compose.yml"
FILE_ENV="docker-compose.yml"

docker-compose --file "$FILE_DOCKER" --env-file "$FILE_ENV" up --detach