// Create a new istance of Search class
var search = new Search();

// When document is ready, request item showcase depending on passed parameters
$(document).ready(function() {
    search.updateItemShowcase();
});

// Search class
function Search() {
    
    // PRIVATE FUNCTIONS | START
    // Request item showcase by AJAX
    function requestItemShowcase() {
        $.ajax({  
            type: "POST",
            url: "php/search/itemResult.php",  
            data: {},
            dataType: "html",
            success: function(response) {
                $("#itemShowcaseRow").append(response);
                initializeItemShowcase();
            },
            error: function() {  
                alert("Call failed"); 
            }
        });
    }

    // Initialize item showcase
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
    /*
        Description: Update item showcase
        Parameters:
            input : String | Valid values
                "Filters" : Update item showcase based on filters
                "Parameters" : Update item showcase based on Parameters
    */
    this.updateItemShowcase = function(input) {
        clearItemShowcase();
        requestItemShowcase();
    }
    // PRIVILEGED FUNCTIONS | END
    
}