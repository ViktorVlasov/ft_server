#!/bin/bash
siteurl="localhost"
wptitle="efumiko"
wpemail="vlasov_viktor01@mail.ru"
wpuser="admin"
wppass="admin"
curl -d "weblog_title=$wptitle&user_name=$wpuser&admin_password=$wppass&admin_password2=$wppass&admin_email=$wpemail" -k https://$siteurl/wp-admin/install.php?step=2