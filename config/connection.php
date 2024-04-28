<?php

namespace config ;
$conn = mysqli_connect("localhost" , "root" , "" , "mysqli" , "7777");

if($conn){
    echo "Connection Successfully . " . PHP_EOL ;
}else{
    echo 'Connection Failed :' . PHP_EOL .$conn->errno;
}