<?php

    // Load environment variables
    require './../../../environment_setup.php';

    try { 

        // Establish a connection
        $dsn = "mysql:host=".HOST_NAME.";dbname=".DB_NAME;
        $connection = new PDO($dsn, USER_NAME, PASSWORD);

        // Get error reports
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

        // Query
        $itemBoxes = $connection->query("SELECT * FROM announcements");

        // Interate over all rows
        foreach ($itemBoxes as $itemBox) 
        { 
            // Extract information from row
            $address = $itemBox['ADDRESS'];
            $price = $itemBox['PRICE'];
            $m2 = $itemBox['SQUARE_METER'];
            $imageFileName = $itemBox['IMAGE_FILE_NAME'];
            $availabilityDate = $itemBox['AVAILABILITY_DATE'];

            //echo '<pre>'; print_r($row['Owner']); echo '</pre>';
            // Output HTML
            echo '<div class="col-sm-4 border px-0 item-box" recentlyClicked="false">';
                echo '<div class="item-box-text" style="opacity: 0;">';
                    echo 'Street: '.$address.'<br>';
                    echo 'Price: '.$price.'€ per month<br>';
                    echo 'From: '.$availabilityDate.'<br>';
                    echo 'm<sup>2</sup>: '.$m2;
                echo '</div>';
                echo "<img class='w-100 h-100' src='img/items/$imageFileName'>";
            echo '</div>';
        } 

        // chiusura della connessione 
        $connection = null; 

    } catch(PDOException $e)  { 
        // notifica in caso di errore nel tentativo di connessione 
        echo $e->getMessage();
    } 

/* 
    <!-- Item 1 -->
<div class="col-sm-3 border px-0 item-box" recentlyClicked="false">
    <div class="item-box-text" style="opacity: 0;">
        Street:<br>
        Price: 800€ per month<br>
        From: via Lecco 1<br>
        m<sup>2</sup>: 20
    </div>
    <img class="w-100 h-100" src="img\items\Lighthouse.jpg">
</div>

<!-- Item 2 -->
<div class="col-sm-3 border px-0 item-box" recentlyClicked="false">
    <div class="item-box-text" style="opacity: 0;">
        Street:<br>
        Price: 800€ per month<br>
        From: via Lecco 1<br>
        m<sup>2</sup>: 20
    </div>
    <img class="w-100 h-100" src="img\items\Lighthouse.jpg">
</div>

<div class="col-sm-3 border">
    C
</div>

<div class="col-sm-3 border">
    D
</div>
 */

?>