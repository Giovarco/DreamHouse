<header>

    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">

                <!-- Logo icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>

                <!-- Logo -->
                <strong>DreamHouse.com</strong>

            </a>

            <button class="navbar-toggler d-block d-sm-none" type="button" data-toggle="collapse" data-target="#mobileFilters" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </div>

    <!-- Mobile filters -->
    <div id="mobileFilters" class="collapse bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php require PHP_FOLDER."/search/searchFilters.php" ?>
                <div>
            </div>
        </div>
    </div>

</header>