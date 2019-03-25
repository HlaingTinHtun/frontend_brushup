<?php


  require 'db_config.php';

  $connection = new PDO($dsn, $username, $password, $options);

  $id  = $_POST["id"];

  $item =[
        "id" => $_POST['id'],
        "title" => $_POST['title'],
        "description"  => $_POST['description']
      ];

  $sql = 'UPDATE items SET id = :id,title = :title,description = :description WHERE id = :id';

  $statement = $connection->prepare($sql);
  $statement->execute($item);


  $sql = "SELECT * FROM items WHERE id = '".$id."'";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $data = $statement->fetch(PDO::FETCH_ASSOC);

  echo json_encode($data);
