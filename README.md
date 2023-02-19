# Base for a php webpage

Basic environment based on docker to run simple php pages, or to be used as a starter for more ambitious projects.

## Before you can run it

You need to have installed **Git**, **Docker** and **Docker Compose**:
- Git: https://git-scm.com/book/en/v2/Getting-Started-Installing-Git
- Docker: https://docs.docker.com/engine/install/
- Docker Compose: https://docs.docker.com/compose/install/

> ### Note for windows
> In order to get it working properly you need to clone this repository inside a WSL2 distro.
> Please check: https://learn.microsoft.com/en-us/windows/wsl/setup/environment

Now you can **clone** this repository.

## How to run it

Using a console, in the root of your local copy of the repository run:
```bash
docker compose up -d 
```
You can visit http://localhost:8080/ to check that it's working.

## How to stop it

Using a console, in the root of your local copy of the repository run:
```bash
docker compose stop
```

## How to use it as starter for another project

Using a console, in the folder where you want to have the new project:
```bash
git clone https://github.com/ecdani/vanilla_php_base.git new_project_name -o boilerplate
cd new_project_name
git remote add origin new_repository_url
```

## Next steps

This base comes with an self-contained documentation repository (mkdocs), where you can check the documentation.

Simply visit http://localhost:8000/ to see all the documentation.

Or check it directly in [/docs](/docs/index.md).

> ### Disclaimer
> Ports may vary. Please check it with: `docker compose ps`