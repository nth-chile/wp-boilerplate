#!/usr/bin/env bash

# Deletes WP core files and directories

bold=$(tput bold)
cyan='\033[0;36m'

echo -e "${cyan}${bold}Deleting WP files..."
rm -rf wp-admin wp-content wp-includes
rm index.php license.txt readme.html wp-activate.php wp-blog-header.php wp-comments-post.php wp-config-sample.php wp-config.php wp-cron.php wp-links-opml.php wp-load.php wp-login.php wp-mail.php wp-settings.php wp-settings.php wp-signup.php wp-trackback.php xmlrpc.php