# RUSH 00
Online shop with PHP, MySql
## Getting Started
### Install docker

```
brew install docker docker-machine docker-compose
```

```
docker-machine create --driver virtualbox Shop
```

```
eval $(docker-machine env Shop)
```

**Note**

Your IP

```
docker-machine ip Shop
```


## Build and Run

```
sh deploy.sh
```

Open phpmyadmin at http://localhost:8000 Open web browser to look at a simple php example at http://localhost:8001
