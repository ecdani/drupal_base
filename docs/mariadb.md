# About Mariadb

## Get ready

In order to make the database work you need to copy `.env.default` file as `.env` both in the root directory.

You also need to provide an user, password and a database name in the `.env` variables. Don´t use none of the default provided.

## How to fill the database with tables and data

You can put a `.sql` file in `docker/mariadb/initialization/scripts` and it will execute at first startup.

## Where is the database physically?

In `docker/mariadb/database_files`. Delete it, and mariadb will be re-initialized on next startup.

## How can we see the database?
You can explore it visually using **Adminer**, wich is a database management tool. You can access it by visiting <http://localhost:8081/>

!!! warning

    Ports may vary. Please check it with: `docker compose ps`

**OR** 

You can connect to MariaDB command line replacing `MARIADB_USER` with the username provided in `.env` in the next command and executing it:

```bash
docker exec -it vanilla_php_base-mariadb mariadb -u MARIADB_USER -p
```

## Where is the official documentation of all of this?

- Docker oficial image of MariaDB: <https://hub.docker.com/_/mariadb>

- Docker oficial image of Adminer: <https://hub.docker.com/_/adminer> *(FastCGI)*