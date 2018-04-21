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

                // Get the right query to bind
                $sql = $connection->prepare( $this->getQuery() );

                // Bind city parameter
                $sql->bindParam(':city', $this->inputCity, PDO::PARAM_STR);

                // Execute prepared statement
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
                        ErrorThrower::send404Error("No records found");
                    }

                  // Close connection
                  $connection = null;

            } catch(PDOException $e)  {
                ErrorThrower::send500Error("Database connection error: ".$e->getMessage());
            } 

        }

        // This function returns the correct query depending on input data
        private function getQuery() {

            // Check if the query depends on filters
            if($this->isByFilterQuery()) {
                return $this->getByFilterQuery();
            } else {
                return "SELECT * FROM announcements WHERE CITY = :city";
            }

        }

        // This function returns a query depending on input filters
        private function getByFilterQuery() {

            // Categories to search in the database
            $categoriesToSearch = array();

            // Iterate on input filters
            foreach($this->inputFilters as $category => $checked) {

                // Add a category to $categoriesToSearch if and only if it is checked in front-end
                if($checked == true) {
                    $categoryWithQuotes = "'".$category."'"; // E.G.: "'Apartment'"
                    array_push($categoriesToSearch, $categoryWithQuotes);
                }
                
            }

            // If $categoriesToSearch is empty, it means that no checkbox is checked in front-end
            if(count($categoriesToSearch) == 0) {
                return "SELECT * FROM announcements WHERE CITY = :city";
            } else {
                $inSet = implode(",", $categoriesToSearch);
                return "SELECT * FROM announcements WHERE CITY = :city AND CATEGORY IN (".$inSet.")";
            }

        }

        // This function returns true if input filters are given as inputs
        private function isByFilterQuery() {
            return $this->inputFilters != null;
        }

        // Expose item list
        public function getItemList() {
            return $this->itemList;
        }
    
    }
?>