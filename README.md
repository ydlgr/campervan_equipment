## Installation
There are 3 different ways to run the project and api;

- If you have docker installed, this is the recommended way;

```bash
$ git clone https://github.com/ydlgr/campervan_equipment && cd campervan_equipment
$ docker-compose up -d
$ docker ps
```
There will be two containers.
Go to the php container with ;
```bash
$ docker exec -it {php_container} bash
```
In the php container terminal , run ;
```bash
$ composer install
```

- If you have symfony binary installed;
```bash
$ git clone https://github.com/ydlgr/campervan_equipment && cd campervan_equipment
$ composer install
$ symfony serve --port 8000 --allow-http --no-tls
```


- If you have php binary installed;
```bash
$ git clone https://github.com/ydlgr/campervan_equipment && cd campervan_equipment
$ composer install
$ php -S 0.0.0.0:8000 -t public
```

## Api Endpoint
http://127.0.0.1:8000/api

##Dashboard Endpoint
http://127.0.0.1:8000/dashboard
