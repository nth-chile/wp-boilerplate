# wp-boilerplate

Installs WordPress and a blank theme set up for writing SCSS and ES6. Includes WP Migrate DB Pro and recent versions of all its addons. The core wpmdbpro plugin is modified so that push/pull works without a license.

## Create new WordPress site

1. `$ cd site-name-here`
2. `$ bash init.sh`
3. `cd` to theme directory and do `$ npm install` or `$ yarn`
4. Start the watch command `$ npm run dev` or `$ yarn dev`

## Notes

- When _init.sh_ prompts for **dbuser**, enter an existing MySQL user with privileges to create and change databases.
- If you are using MAMP, the default **dbhost** is `127.0.0.1:3306`. I enter `site-name-here.localhost` for **url** and add a `VirtualHost` to MAMP's _httpd-vhosts.conf_ file to point that subdomain to the site directory.