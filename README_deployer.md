# Deployer

https://deployer.org/

### How to deploy

Make sure to set permission for server_key.pem

```sh
$ chmod 400 server_key.pem
```

To deploy the application.

```sh
$ php deployer.phar deploy
```

To ssh into the server

```sh
$ php deployer.phar ssh
```

