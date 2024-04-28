<?php

include_once "./connection.php";
global $conn;

$table = "CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(256),
    age INT UNSIGNED ,
    sex ENUM ('f','m'),
    isSingle BOOLEAN 
);";



if($conn->query($table)){
    echo "Table Is Created" . PHP_EOL;
}else{
    echo "Table CanNot Created" . PHP_EOL;
}

