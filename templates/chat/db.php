<?php
$host='localhost'; // имя хоста (уточняется у провайдера)
$database='pagebd'; // имя базы данных, которую вы должны создать
$user='root'; // заданное вами имя пользователя, либо определенное провайдером
$pswd=''; // заданный вами пароль
$dbh = mysql_connect($host, $user, $pswd) or die("Не могу соединиться с MySQL.");
mysql_select_db($database) or die("Не могу подключиться к базе.");
//Кодировка
 mysql_query ("SET NAMES `cp1251`");  
 mysql_query ("set character_set_client='cp1251'");    
 mysql_query ("set character_set_results='cp1251'");    
 mysql_query ("set collation_connection='cp1251_general_ci'"); 
?>