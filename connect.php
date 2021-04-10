<?php
try {
    //try to connect to database 
    //data source name 
    $dsn = 'mysql:host=localhost;dbname=COMP1006_Winter2021Sem';
    $username = 'root'; 
    $password = '';
    //create instance of PDO object

   /* $dsn = 'mysql:host=172.31.22.43 ;dbname=Harman200456178';
    $username = 'Harman200456178'; 
    $password = 'x3lXI_p4uv';*/
    $db = new PDO($dsn,$username, $password); 
    //echo 'Connected successfully! Whoo hoo!!!!';*/
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}
catch(PDOException $e ) {
    //display error message if things go wrong! 
    $error_message = $e->getMessage();
    echo 'Something went wrong!!!' . $error_message . '!'; 
    var_dump("Issue connecting:{$error -> getMessage()}");
    exit();
}
?>




