<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "todo_app";

$connect = mysqli_connect($host, $username, $password, $database);

$task = mysqli_real_escape_string($connect, $_POST['task']);

mysqli_query($connect, "INSERT INTO todos (task) VALUES (' ".$task."')");

mysqli_close($connect);