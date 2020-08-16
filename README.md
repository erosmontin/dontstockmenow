# Caravel
base settings for laravel roject

## Requirements
- git
- composer
- laravel
- node.js
- if needed this is a cool link to know how to install these softwares
https://www.youtube.com/watch?v=ImtZ5yENzgE&amp;index=6&amp;t=0s

## Installation
```
- git clone https://github.com/erosmontin/caravel.git
- cd cloudmrhub
- composer install 
```
-  rename .env.example as .env and edit(see https://laravel.com/docs/7.x/database)
    - I prefer sqlite for the dev phase
        - create a empty dbfile  
        ```
            - touch database/database.sqlite
      ```
        - open the file on a text editor and:
            - DB_CONNECTION=sqlite
            - DB_DATABASE=/absolute/path/to/database.sqlite
            - DB_FOREIGN_KEYS=true
 ```
- php artisan key:generate
- php artisan migrate:fresh --seed
- php artisan serve
- npm run watch #in a second tab
```
- open the link provided by artisan serve on your browser
- set mail server to mailtrap.io (required to test the user registration)
    - create an account on mailtrap.io
    - after the registration in mailtrap, enter in your profile and copy username and password
    - edit .env file of the git repo 
        - MAIL_USERNAME=
        - MAIL_PASSWORD=
        - MAIL_ENCRYPTION=null
        - MAIL_FROM_ADDRESS=support@cloudmrhub.com
 
