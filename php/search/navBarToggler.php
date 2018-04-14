<?php
    // Add mobile filters only in search page
    if(isset($_GET["page"]) && $_GET["page"] == "Search") {
?>
    <button class="navbar-toggler d-block d-sm-none" type="button" data-toggle="collapse" data-target="#mobileFilters" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<?php
    }
?>