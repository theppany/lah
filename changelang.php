<?php
setcookie('lang', $_REQUEST['lang'], time()+31536000, "/");
header("Location:".$_SERVER['HTTP_REFERER']);