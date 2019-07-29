#!/usr/bin/env bash

bold=$(tput bold)
cyan='\033[0;36m'

# Set $WP_CLI_PHP to the MAMP php directory
export WP_CLI_PHP=/Applications/MAMP/bin/php/php7.3.1/bin/php

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
wp core download --skip-content

# Create wp-config.php file
wp config create --prompt=dbname,dbuser,dbhost --skip-check --force

# Create database
wp db create

# Install WP
wp core install --prompt

# Make content directories
mkdir wp-content/themes
mkdir wp-content/plugins
mkdir wp-content/upgrade

# Add index.php to new directories
echo "<?php // Silence is golden" > wp-content/index.php
cp wp-content/index.php wp-content/themes/index.php
cp wp-content/index.php wp-content/plugins/index.php

# Move theme to themes directory
mv theme-name-here wp-content/themes/theme-name-here

# Activate theme
wp theme activate theme-name-here

# Install WP Migrate DB with addons
wp plugin install wp-migrate-db-pro-1.9.1.zip wp-migrate-db-pro-cli-1.3.4.zip wp-migrate-db-pro-media-files-1.4.12.zip wp-migrate-db-pro-multisite-tools-1.2.zip wp-migrate-db-pro-theme-plugin-files-1.0.4.zip --activate