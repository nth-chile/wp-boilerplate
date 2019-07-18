# wp-workflow

## Create new WordPress site

1. Rename the `your-site here` directory and move it to where you host your WP sites.
2. `$ bash init.sh`.

### Notes:

- When prompted for *dbuser*, need to enter an existing MySQL user with privileges to create and change databases
- I am using MAMP, and by default my *dbhost* is `127.0.0.1:3306`, and the *url* I enter is `localhost/my-site-name`.