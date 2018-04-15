<?php

    // Load environment variables
    require './../../../environment_setup.php';

    // Load classes
    require PHP_FOLDER."/classes/Model/ItemList.php";
    
    // Load classes
    require PHP_FOLDER."/classes/View/SearchItemShowcaseView.php";

    // Get items to show
    $itemList = isset($itemList) ? $itemList : new ItemList();

    // Print HTML
    $searchItemShowcaseView = new SearchItemShowcaseView($itemList);
    echo $searchItemShowcaseView->printHtml();

?>