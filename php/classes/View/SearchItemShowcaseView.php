<?php

    class SearchItemShowcaseView {

        private $itemList;

        // Constructor
        function __construct($itemList) {
            $this->itemList = $itemList;
        }

        // This function prints the intended HTML
        public function printHtml() {

            // Get item array
            $itemArray =  $this->itemList->getItemList();
            
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

        }
    }

?>