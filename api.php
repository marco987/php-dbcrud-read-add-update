<?php

  header('Content-type: application/json');

  $servername = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'dbdrink';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn -> connect_error) {
    var_dump('error');
    var_dump($conn);
    die();
  }

  $query = "QUERY_PER_IL_DATABASE";
  $res = $conn -> query($query);

  $array = [];

  if ($res && $res -> num_rows > 0) {

    while($row = $res -> fetch_assoc()) {

      $array[] = $row;

    }
  }

  $conn->close();

  echo json_encode($array);



?>
