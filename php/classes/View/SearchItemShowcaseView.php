<?php

    class SearchItemShowcaseView {

        private $html;

        function __construct($itemList) {

            // Initialize private members
            $this->html = array();

            // Get item array
            $itemArray =  $itemList->getItemList();
            
            // Interate over all rows
            foreach ($itemArray as $item) 
            { 
                // Extract information from row
                $address = $item->getAddress();
                $price = $item->getPrice();
                $m2 = $item->getM2();
                $imageFileName = $item->getImageFileName();
                $availabilityDate = $item->getAvailabilityDate();

                // Output HTML
                array_push($this->html, '<div class="col-sm-4 border px-0 item-box" recentlyClicked="false">');
                    array_push($this->html, '<div class="item-box-text" style="opacity: 0;">');
                        array_push($this->html, 'Street: '.$address.'<br>');
                        array_push($this->html, 'Price: '.$price.'€ per month<br>');
                        array_push($this->html, 'From: '.$availabilityDate.'<br>');
                        array_push($this->html, 'm<sup>2</sup>: '.$m2);
                    array_push($this->html, '</div>');
                    array_push($this->html, "<img class='w-100 h-100' src='img/items/$imageFileName'>");
                array_push($this->html, '</div>');

            } 

        }

        public function getHtml() {
            return implode("", $this->html);
        }
    }

?>