# About debugging

There are debugging for server-side based on Xdebug.

# How to configure debugging

## For VSCode

To be able to debugging add the following values inside of your **Launch Settings (JSON)**:
!!! warning

    Don't copy and paste literally! Adapt it.

```json
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for Xdebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "hostname": "0.0.0.0",
            "pathMappings": {
                "/var/www/html/": "${workspaceFolder}/src"
            }
        }
    ]
}
```
