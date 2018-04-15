<?php

    class SearchFilterView {

        private $itemList;
        private $categoryFound;

        // Constructor
        function __construct($itemList) {
            $this->categoryFound = array();
            $this->itemList = $itemList;
        }

        /*
        This function returns true if a new category is found, false otherwise.
        Moreover it keeps track of all unique categories found.
        */
        function isNewCategory($category) {

            // If a new category is found, add that category to $categoryFound
            if(in_array($category, $this->categoryFound)) {
                return false;
            } else {
                array_push($this->categoryFound, $category);
                return true;
            }

        }

        // This function prints the intended HTML
        public function printHtml() {
            
            // Get item array
            $itemArray =  $this->itemList->getItemList();
                        
            // Interate over all rows
            foreach ($itemArray as $item) { 

                // Extract relevant information from row
                $category = $item->getCategory();

                // If a new category is found, print a new filter checkbox
                if($this->isNewCategory($category)) {

                    // Output HTML
                    echo '<div class="checkbox">';
                        echo '<label>';
                            echo '<input type="checkbox" value="">';
                            echo "&nbsp".$category;
                        echo '</label>';
                    echo '</div>';

                }

            } 

        }

        
    }

?>