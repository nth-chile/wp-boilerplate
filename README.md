# wp-boilerplate

This repo includes:

- a bash script that installs WordPress without default themes
- a very blank theme containing boilerplate and NPM scripts for writing SCSS and modern JavaScript

## Create new WordPress site

1. Rename the `site-name-here` directory and move it to where you host WP sites.
2. From that directory, run `$ bash init.sh`.
3. Navigate to the `theme/theme-name-here` directory and run `npm install` or `yarn`.

Then, when developing, first run the watch command `yarn dev`.

### Notes:

- When `init.sh` prompts for *dbuser*, you need to enter an existing MySQL user with privileges to create and change databases
- I am using MAMP, and by default my *dbhost* is `127.0.0.1:3306`, and the *url* I enter is `localhost`.