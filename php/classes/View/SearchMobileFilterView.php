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
                        
                            // Filter bar
                            array_push($this->html, '<div style="background-color:white; color: #131862; margin-left: -15px; margin-right: -15px;" class="text-center">');
                                array_push($this->html, 'Filters');
                            array_push($this->html, '</div>');

                            // Filter checkboxes
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
        
    
