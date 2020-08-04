#!/bin/bash
service nginx start && service php7.3-fpm start && service mysql start
bash create_db.sh
bash wp_install.sh
sleep infinity &
wait