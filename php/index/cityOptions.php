<?php

    try { 

        // Establish a connection
        $dsn = "mysql:host=".HOST_NAME.";dbname=".DB_NAME;
        $connection = new PDO($dsn, USER_NAME, PASSWORD);

        // Get error reports
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        // Query
        $cityOptions = $connection->query("SELECT DISTINCT CITY FROM announcements");

        // Interate over all rows
        foreach ($cityOptions as $cityOption) {
            $cityName = $cityOption['CITY'];
            echo "<option value='$cityName'>";
        } 

        // chiusura della connessione 
        $connection = null; 

    } catch(PDOException $e)  { 
        // notifica in caso di errore nel tentativo di connessione 
        echo $e->getMessage();
    }

?>