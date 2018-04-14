<?php

    // Load environment variables
    require './../../../environment_setup.php';

    // Load classes
    require PHP_FOLDER."/classes/ItemList.php";
    
    // Load classes
    require PHP_FOLDER."/classes/View/SearchItemShowcaseView.php";

    // $ItemList contains the whole list of apartments
    $itemList = new ItemList();

    //
    $searchItemShowcaseView = new SearchItemShowcaseView($itemList);
    echo $searchItemShowcaseView->getHtml();

?>