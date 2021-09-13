<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "form");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_error) {
    echo "Sorry we are having technical dificulties.\n";
    echo 'Error: ' . $mysqli->connect_error . '\n';
    exit();
}
mysqli_query($mysqli, "INSERT INTO clients (email, subject, message)
VALUES ('$_POST[email]', '$_POST[subject]', '$_POST[message]')");
