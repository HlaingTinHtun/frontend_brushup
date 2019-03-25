<?php


 require 'db_config.php';

 $connection = new PDO($dsn, $username, $password, $options);

 $id  = $_POST["id"];
 // $id = $_GET["id"];

 $sql = "DELETE FROM items WHERE id = :id";

 $statement = $connection->prepare($sql);
 $statement->bindValue(':id', $id);
 $statement->execute();

 echo json_encode([$id]);


?>
