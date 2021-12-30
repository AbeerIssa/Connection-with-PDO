<?php
$dsn = 'mysql: host = localhost ; dbname = products';
$user = 'root';
$pass ='';

try {
    $db = new PDO ( $dsn , $user , $pass ); 
    $db -> setAttribute ( PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION );
    echo 'You are connected successfully !';

}

catch ( PDOException $e ) {
    echo 'Failed' . $e -> getMessage();

}
