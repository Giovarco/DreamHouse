<?php

    // Load item class
    require PHP_FOLDER."/classes/Model/Item.php";

    // ItemList class - This class reads item data from database and creates an array that stores item objects
    class ItemList {

        // List of items
        private $itemList;

        // Constructor
        function __construct() {

            // Initialize private members
            $this->itemList = array();

            try { 

                // Establish a connection to DB
                $dsn = "mysql:host=".HOST_NAME.";dbname=".DB_NAME;
                $connection = new PDO($dsn, USER_NAME, PASSWORD);

                // Get error reports
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                // Query
                $itemRows = $connection->query("SELECT * FROM announcements");

                // Interate over all rows
                foreach ($itemRows as $itemRow) 
                {
                    // Create an item object
                    $item = new Item($itemRow);

                    // Fill the item array
                    array_push($this->itemList, $item);
                }

                // Close connection
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