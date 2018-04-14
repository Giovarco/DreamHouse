<?php

    // Load item class
    require PHP_FOLDER."/classes/Model/Item.php";

    class ItemList {

        // List of item
        private $itemList;

        // Constructor
        function __construct() {

            $this->itemList = array();

            try { 

                // Establish a connection
                $dsn = "mysql:host=".HOST_NAME.";dbname=".DB_NAME;
                $connection = new PDO($dsn, USER_NAME, PASSWORD);

                // Get error reports
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                // Query
                $itemRows = $connection->query("SELECT * FROM announcements");

                // Interate over all rows
                foreach ($itemRows as $itemRow) 
                {
                    // This is an apartment item
                    $item = new Item($itemRow);

                    // Fill the item array
                    array_push($this->itemList, $item);
                }

                // chiusura della connessione 
                $connection = null; 
                    
            } catch(PDOException $e)  {  
                throw new Exception( $e->getMessage() );
            } 

        }

        // Expose item list
        public function getItemList() {
            return $this->itemList;
        }
    
    }
?>