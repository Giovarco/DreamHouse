<?php

    require_once PHP_FOLDER."/classes/View/SearchFilterView.php";

    class SearchMobileFilterView {

        private $html;

        function __construct($itemList) {
            
            // Initialize private members
            $this->html = array();

            // Get filters: same HTML of desktop version
            $searchFilterView = new SearchFilterView($itemList);
            $filterHtml = $searchFilterView->getHtml();

            // Build HTML
            array_push($this->html, '<div id="mobileFilters" class="collapse bg-dark">');
                array_push($this->html, '<div class="container">');
                    array_push($this->html, '<div class="row">');
                        array_push($this->html, '<div class="col">');
                            array_push($this->html, $filterHtml);
                        array_push($this->html, '<div>');
                    array_push($this->html, '</div>');
                array_push($this->html, '</div>');
            array_push($this->html, '</div>');

            // Store the HTML
            $finalHtml = implode("", $this->html);
            $this->html = $finalHtml;

        }

        public function getHtml() {
            return $this->html;
        }

    }

?>
        
    
