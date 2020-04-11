Prerequisities:
- PHP version =>7.2
- OpenSSL PHP Extension
- PDO PHP Extension
- mbstring PHP Extension

Step:
1. You need `composer` to be installed first.
    If you haven't installed it before, please follow the instruction given here.

2. Copy the folder to your desired directory.
    If you're a *NIX user and a terminal warrior, use the command below
    `cp tesLumen/* /your/desired/directory/path/folderName`

3. Go to the directory.
    If you're a *NIX user and a terminal warrior, use the command below
    `cd /your/desired/directory/path/folderName`

4. Open the .env file and edit using your local configuration. Make sure you
   have created the database before and the user has all privileges on the
   database.

    ```
    APP_NAME=Lumen
    APP_ENV=local
    APP_KEY='ThisIsApplicationKey'
    APP_DEBUG=true
    APP_URL=http://localhost:{port}
    APP_TIMEZONE=UTC
    
    LOG_CHANNEL=stack
    LOG_SLACK_WEBHOOK_URL=
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE={database_name}
    DB_USERNAME={database_user}
    DB_PASSWORD={database_password}
    
    CACHE_DRIVER=file
    QUEUE_CONNECTION=sync
    ```

5. Install all required packages using `composer install`

6. Run the database migration using artisan command
    `php artisan migrate:fresh`


