<?php

define("DB_SERVERNAME", "localhost:3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-university");


$conn = new mysql(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($conn && $conn->connect_error){
    echo "Errrore" . $conn->connect_error;
}else{
    echo "SEI CONNESSO!";
}

?>