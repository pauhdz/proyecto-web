<?php 
    $tns = "  
    (DESCRIPTION =
        (ADDRESS_LIST =
        (ADDRESS = (PROTOCOL = TCP)(HOST = 172.17.127.69)(PORT = 1521))
        )
        (CONNECT_DATA =
        (SERVICE_NAME = PogoHotels)
        )
    )
       ";

    $user = "pogo";
    $pass = "123";
    $dbname = "PogoHotels";

    try {       
        $connection = new PDO("oci:dbname=$tns", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    
    }
?>