// Create a new istance of Search class
var search = new Search();

// When document is ready, request item showcase depending on passed parameters
$(document).ready(function() {
    search.attachFilterCheckboxHandler();
    search.updateItemShowcase(Search.prototype.filterByCity);
});

// Search class
function Search() {

    // PRIVATE FUNCTIONS | START
    function getFilterCheckboxValues() {

        var filters = {};
        var filterWindowId;

        if(isMobile()) {
            filterWindowId = "mobileFilterWindow";
        } else {
            filterWindowId = "filterWindow";
        }

        var checkBoxes = $("#"+filterWindowId).find("input[type=checkbox]");

        checkBoxes.each(function() {
            var key = $(this).attr("name");
            var value = $(this).is(':checked');
            filters[key] = value;
        });

        return filters;

    }

    /*
    This function requests the item showcase by AJAX
        Parameters:
            input : String -> Valid values:
                Search.prototype.filterByCity : Update item showcase based only based on city
                Search.prototype.filterByCityAndFilters : Update item showcase based on city and filters
    */
    function requestItemShowcase(input) {


        // Activate loading screen
        loadingScreenHandler.showLoadingScreen();

        // Prepare payload
        var data = {};

        if(input === Search.prototype.filterByCity) {
            data.city = URL.getParameterFromURL("city");
        } else if(input === Search.prototype.filterByCityAndFilters) {
            data.city = URL.getParameterFromURL("city");
            data.filters = JSON.stringify( getFilterCheckboxValues() );
        } else {
            throw new Error("Invalid input parameters");
        }

        // Call AJAX
        $.ajax({  
            type: "GET",
            url: "php/search/itemResult.php",
            data: data,
            dataType: "html",
            success: function(response) {

                // Append received HTML
                $("#itemShowcaseRow").append(response);

                // Initialize item showcase
                initializeItemShowcase();

                // Deactivate loading screen
                loadingScreenHandler.hideLoadingScreen();

            },
            error: function() {

                // Deactivate loading screen
                loadingScreenHandler.hideLoadingScreen();

                // Prompt error
                alert("Call failed");

            }
        });

    }

    // This function initialize item showcase, so they have their intended behaviour with the user
    function initializeItemShowcase() {

        // Get all item boxes
        var itemBoxes = $(".item-box");

        // Handle click on item boxes
        itemBoxes.click(function() {

            if (isMobile()) {

                var thisItemBox = $(this);
                var wasRecentlyClicked = (thisItemBox.attr("recentlyClicked") == "true");
    
                if(wasRecentlyClicked) {
                    console.log("Salta all'annuncio (Mobile)");
                } else {
                    thisItemBox.attr("recentlyClicked", true);
                }

            } else {
                console.log("Salta all'annuncio (Desktop)");
            }

        });
    
        // Handle hover on item boxes
        itemBoxes.hover(

            // Fade image and show text when mouse is over the item box
            function() {
                var itemBox = $(this);
                var image = itemBox.children("img:first");
                var text = itemBox.children(".item-box-text");
    
                image.fadeTo("slow" , 0.2);
                text.fadeTo("slow", 1);
            },

            // Show image and hide text when mouse leaves the item box
            function() {
    
                itemBoxes.attr("recentlyClicked", false);
    
                var itemBox = $(this);
                var image = itemBox.children("img:first");
                var text = itemBox.children(".item-box-text");
    
                image.fadeTo("slow" , 1);
                text.fadeTo("slow", 0);

            }
        );
        
    }

    function clearItemShowcase() {
        $("#itemShowcaseRow").empty();
    }
    // PRIVATE FUNCTIONS | END

    // PRIVILEGED FUNCTIONS | START
    // This function attach the handler that has to be executed when a filter checkbox is checked
    this.attachFilterCheckboxHandler = function() {
        $("input[type=checkbox]").change(function() {
            search.updateItemShowcase(Search.prototype.filterByCityAndFilters);
        });
    }

    // This function updates item showcase
    this.updateItemShowcase = function(input) {
        clearItemShowcase();
        requestItemShowcase(input);
    }
    // PRIVILEGED FUNCTIONS | END
    
}

// STATIC VARIABLES | START
Search.prototype.filterByCity = 0;
Search.prototype.filterByCityAndFilters = 1;
// STATIC VARIABLES | END