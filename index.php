<?php

define("DB_SERVERNAME", "localhost:3306");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-university");


$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($conn && $conn->connect_error){
    echo "Errrore" . $conn->connect_error;
}else{
    echo "SEI CONNESSO!";
}




$sql = "SELECT `name` FROM `students` LIMIT 25";

$result = $conn->query($sql);


if($result && $result->num_rows > 0){

  while($row = $result->fetch_assoc()){;


?>

<div>
    <?php
    echo "name". $row ['name'] ;
    ?>
</div>
<?php
  }
}elseif($result){
    echo "Non ci sono risultati";
}else{
    echo "Errore";
}

$conn->close();

?>