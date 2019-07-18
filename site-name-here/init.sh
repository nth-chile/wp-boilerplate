#!/usr/bin/env bash

bold=$(tput bold)
cyan='\033[0;36m'

# Set $WP_CLI_PHP to the MAMP php directory
export WP_CLI_PHP=/Applications/MAMP/bin/php/php7.3.1/bin/php
echo $WP_CLI_PHP

# Install WP-CLI if not installed
hash wp 2>/dev/null

if [ $? -ne 0 ]
then
  printf "Installing WP-CLI...\n"
  curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
  chmod +x wp-cli.phar
  printf "\nMoving WP-CLI to \`/usr/local/bin/wp\`...\n"
  sudo mv wp-cli.phar /usr/local/bin/wp
fi

# Download WordPress
printf "Downloading WordPress...\n"
wp core download --skip-content

# Create wp-config.php file
wp config create --prompt=dbname,dbuser,dbhost --skip-check --force

# Create database
wp db create

# Install WP
wp core install --prompt

# Add src and compilers for JS and SCSS
# Init git