#!/usr/bin/env bash
#docker-machine start Shop
#eval $(docker-machine env Shop)
docker-compose up -d
sleep 5
docker exec rush_www_1 php install.php
