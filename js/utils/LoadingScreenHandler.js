// Create an instance of LoadingScreenHandler
var loadingScreenHandler = new LoadingScreenHandler();

// Loading Screen class - This class handles loading screen windows
function LoadingScreenHandler() {
    
    // PRIVATE FUNCTIONS | START
    function getLoadingScreenHtml() {

        // HTML container
        var html = [];

        // Generate HTML
        html.push("<div id='loadingScreen'>");
            html.push("<img src='img/House.gif' class='inverted'>");
        html.push("</div>");

        // Return html
        return html.join("");

    }
    // PRIVATE FUNCTIONS | START

    // PRIVILEGED FUNCTIONS | START
    // This function creates and shows the loading screen
    this.showLoadingScreen = function() {

        // Check if a previous istance of loading screen was created
        if(loadingScreenObject == null) {

            // Append loading screen html to DOM for the first time
            bodyObject.append(loadingScreenHtml);

            // Cache the object for next activations
            loadingScreenObject = $("#loadingScreen:first");

        } else {
            // Show existing loading screen
            loadingScreenObject.show();
        }
        
    }

    // This function hides loading screen
    this.hideLoadingScreen = function() {
        if(loadingScreenObject != null) {
            loadingScreenObject.hide();
        }
    }
    // PRIVILEGED FUNCTIONS | END

    // PRIVATE VARIABLES | START
    var loadingScreenHtml = getLoadingScreenHtml();
    var loadingScreenObject = null;
    var bodyObject = $("body:first");
    // PRIVATE VARIABLES | END

}