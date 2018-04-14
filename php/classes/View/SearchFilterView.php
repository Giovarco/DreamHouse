<?php

    class SearchFilterView {

        private $html;
        private $categoryFound;

        function __construct($itemList) {

            // Initialize private members
            $this->html = array();
            $this->categoryFound = array();

            // Get item array
            $itemArray =  $itemList->getItemList();
            
            // Interate over all rows
            foreach ($itemArray as $item) { 

                // Extract relevant information from row
                $category = $item->getCategory();

                // If a new category is found, print a new filter checkbox
                if($this->isNewCategory($category)) {

                    // Output HTML
                    array_push($this->html, '<div class="checkbox">');
                        array_push($this->html, '<label>');
                            array_push($this->html, '<input type="checkbox" value="">');
                            array_push($this->html, "&nbsp".$category);
                        array_push($this->html, '</label>');
                    array_push($this->html, '</div>');

                }

            } 

            // Store the HTML
            $finalHtml = implode("", $this->html);
            $this->html = $finalHtml;

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

        public function getHtml() {
            return $this->html;
        }
    }

?>