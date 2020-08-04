#!/bin/bash
if [[ "$1" == on || "$1" == "off"  ]]; then 
sed -i -e "s/autoindex [a-z]*/autoindex $1/" /etc/nginx/sites-available/ft_server.conf
service nginx restart 
else 
echo "incorrect input"
fi