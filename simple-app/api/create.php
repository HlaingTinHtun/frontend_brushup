<?php


require 'db_config.php';

  $connection = new PDO($dsn, $username, $password, $options);

  $new_item = array(
    "title" => $_POST['title'],
    "description"  => $_POST['description']
  );

  $sql = sprintf(
      "INSERT INTO %s (%s) values (%s)",
      "items",
      implode(", ", array_keys($new_item)),
      ":" . implode(", :", array_keys($new_item))
  );



  $statement = $connection->prepare($sql);
  $result = $statement->execute($new_item);


  $sql = "SELECT * FROM items Order by id desc LIMIT 1";


  $statement = $connection->prepare($sql);
  $statement->execute();


  $data = $statement->fetch(PDO::FETCH_ASSOC);


echo json_encode($data);
