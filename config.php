<?php
// PostgreSQL connection parameters
$host = "dpg-cudmlertq21c738h6ucg-a";
$port = "5432"; // Default PostgreSQL port
$dbname = "todo";
$user = "todo_b7bf_user";
$password = "O4bNxYb0eXY994IRxmP6n2IIBPLe8f1m";

// Establish the connection
$db = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password")
    or die("Connection failed: " . pg_last_error());
?>