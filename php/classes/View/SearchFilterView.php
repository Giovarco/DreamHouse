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
                $address = $item->getCategory();

                // If a new category is found, print a new filter checkbox
                if($this->isNewCategory($address)) {

                    // Output HTML
                    array_push($this->html, '<div class="checkbox">');
                        array_push($this->html, '<label>');
                            array_push($this->html, '<input type="checkbox" value="">');
                            array_push($this->html, $address);
                        array_push($this->html, '</label>');
                    array_push($this->html, '</div>');

                }

            } 

            // Store the HTML
            $finalHtml = implode("", $this->html);
            $this->html = $finalHtml;

        }

        function isNewCategory($address) {

            // If a new category is found, add that category to $categoryFound
            if(in_array($address, $this->categoryFound)) {
                return false;
            } else {
                array_push($this->categoryFound, $address);
                return true;
            }

        }

        public function getHtml() {
            return $this->html;
        }
    }

?>