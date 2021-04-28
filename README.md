# Set up

Add corresponding database URL to `.env` - create database, user & assign its access rights.

```shell
php bin/console doctrine:migrations:migrate
```

# Start a server

```shell
symfony local:server:start
```

## Register form

Head to `/register`. Available routes:

* `/login`
* `/logout`
