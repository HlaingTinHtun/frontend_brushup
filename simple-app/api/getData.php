<?php
  require 'db_config.php';


  $num_rec_per_page = 5;


  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };


  $start_from = ($page-1) * $num_rec_per_page;

  $connection = new PDO($dsn, $username, $password, $options);


  $sqlTotal = "SELECT * FROM items";
  $sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";


  $statement = $connection->prepare($sql);
  $statement->execute();


  while($row = $statement->fetch(PDO::FETCH_ASSOC)){

     $json[] = $row;

  }


  $data['data'] = $json;

  $statement = $connection->prepare($sqlTotal);
  $statement->execute();


  $data['total'] = $statement->rowCount();


  echo json_encode($data);
