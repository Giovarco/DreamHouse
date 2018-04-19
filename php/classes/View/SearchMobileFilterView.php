<?php

    require_once PHP_FOLDER."/classes/View/SearchFilterView.php";

    class SearchMobileFilterView {

        private $itemList;
        private $searchFilterView;

        // Constructor
        function __construct($itemList) {
            $this->itemList = $itemList;
            $this->searchFilterView = new SearchFilterView($itemList);
        }

        // This function prints the intended HTML
        public function printHtml() {
            echo '<div id="mobileFilterWindow" class="collapse bg-dark">';
                echo '<div class="container">';
                    echo '<div class="row">';
                        echo '<div class="col">';
                        
                            // Filter bar
                            echo '<div style="background-color:white; color: #131862; margin-left: -15px; margin-right: -15px;" class="text-center">';
                                echo 'Filters';
                            echo '</div>';

                            // Filter checkboxes
                            $this->searchFilterView->printHtml();

                        echo '<div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        }

    }

?>
        
    
