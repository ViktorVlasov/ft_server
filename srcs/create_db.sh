#!/bin/bash
mariadb -e "CREATE DATABASE wp_db;"
mariadb -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mariadb -e "FLUSH PRIVILEGES;"