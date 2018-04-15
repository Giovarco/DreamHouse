<?php
    // Load classes
    require_once PHP_FOLDER."/classes/Model/ItemList.php";
    require_once PHP_FOLDER."/classes/View/SearchFilterView.php";

    // Get items to show
    $itemList = isset($itemList) ? $itemList : new ItemList();

    // Print HTML
    $searchFilterView = new SearchFilterView($itemList);
    echo $searchFilterView->printHtml();
?>

