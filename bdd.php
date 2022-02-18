<?php
//connection a la bdd sql
$user = 'root';
$password = ''; //To be completed if you have set a password to root
$database = 'projetalex'; //To be completed to connect to a database. The database must exist.
$port = NULL; //Default must be NULL to use default port
$mysql = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysql->connect_error) {
    die('Connect Error (' . $mysql->connect_error . ') '
        . $mysql->connect_error);
}
echo '<p>Connection OK ' . $mysql->host_info . '</p>';
echo '<p>Server ' . $mysql->server_info . '</p>';
echo '<p>Initial charset: ' . $mysql->character_set_name() . '</p>';
?>