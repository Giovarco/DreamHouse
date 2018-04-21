<?php
    // Add mobile filters only in search page
    if(isset($_GET["page"]) && $_GET["page"] == "Search") {

        // Load classes
        require_once PHP_FOLDER."/classes/Model/ItemList.php";
        require_once PHP_FOLDER."/classes/View/SearchMobileFilterView.php";

        // Get items to show
        $itemList = isset($itemList) ? $itemList : new ItemList();

        // Print HTML
        $searchMobileFilterView = new SearchMobileFilterView($itemList);
        echo $searchMobileFilterView->printHtml();

    }
?>