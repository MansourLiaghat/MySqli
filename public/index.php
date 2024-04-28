<?php

use contracts\clas ;

$user = new contracts\clas\User($conn);
$user->create("sajad" , "sajilee@gmail.com");
