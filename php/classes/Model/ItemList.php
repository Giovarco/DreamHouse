<?php

    // Load item class
    require PHP_FOLDER."/classes/Model/Item.php";

    // ItemList class - This class reads item data from database and creates an array that stores item objects
    class ItemList {

        // List of items
        private $itemList;

        // Request parameters
        private $inputCity;
        private $inputFilters;

        // Constructor
        function __construct() {

            // Initialize private members
            $this->itemList = array();
            $this->inputCity = $_GET['city'];
            $this->inputFilters = isset($_GET['filters']) ? json_decode($_GET['filters'], true) : null;

            try { 

                // Establish a connection to DB
                $dsn = "mysql:host=".HOST_NAME.";dbname=".DB_NAME;
                $connection = new PDO($dsn, USER_NAME, PASSWORD);

                // Get error reports
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

                $sql = $connection->prepare( $this->getQuery() );

                $sql->bindParam(':city', $this->inputCity, PDO::PARAM_STR);

                // esecuzione del prepared statement
                $sql->execute();

                if($sql->rowCount() > 0){

                    // creazione di un'array contenente il risultato
                    $itemRows = $sql->fetchAll();

                     // Interate over all rows
                    foreach ($itemRows as $itemRow) 
                    {
                        // Create an item object
                        $item = new Item($itemRow);

                        // Fill the item array
                        array_push($this->itemList, $item);
                    }

                  }else{
                    echo "Nessun record corrispondente alla richiesta.";
                  }
                  // chiusura della connessione
                  $connessione = null;

                /*
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
                */
            } catch(PDOException $e)  {  
                throw new Exception( $e->getMessage() );
            } 

        }

        private function getQuery() {

            if($this->isByFilterQuery()) {
                
                $categoriesToSearch = array();
                foreach($this->inputFilters as $category => $checked) {

                    if($checked == true) {
                        $categoryWithQuotes = "'".$category."'";
                        array_push($categoriesToSearch, $categoryWithQuotes);
                    }
                    
                }
                if(count($categoriesToSearch) == 0) {
                    return "SELECT * FROM announcements WHERE CITY = :city";
                } else {
                    return "SELECT * FROM announcements WHERE CITY = :city AND CATEGORY IN (".implode(",", $categoriesToSearch).")";
                }
            } else {
                return "SELECT * FROM announcements WHERE CITY = :city";
            }

            // SELECT * FROM :city WHERE CATEGORY IN (X, Y, ...)
        }

        private function isByFilterQuery() {
            return $this->inputFilters != null;
        }

        // Expose item list
        public function getItemList() {
            return $this->itemList;
        }
    
    }
?>