var Home = new Home();

function Home() {

    // PRIVATE FUNCTIONS | START
    function getCityList() {
        
            var cityList = [];
        
            $("datalist:first").find("option").each(function() {
                var cityName = $(this).val();
                cityList.push(cityName);
            });
        
            return cityList;
        
        }
        
    function getCityInput() {
        return $("input:first");
    }
    // PRIVATE FUNCTIONS | END

    // PRIVILEGED FUNCTIONS | START
    this.confirmSelection = function() {

        var enteredCity = cityInputObj.val();

        if(cityList.indexOf(enteredCity) != -1) {

            // Create the URL to redirect to Search page
            var url = new URL();
            url.addPath(searchPagePath);
            url.addParameter("city", enteredCity);

            // Redirect
            window.location.href = url.getURL();

        }

    }
    // PRIVILEGED FUNCTIONS | END

    // PRIVATE VARIABLES | START
    var searchPagePath = "search.php";
    var cityList = getCityList(cityList); // Initialize the city list
    var cityInputObj = getCityInput(); // Get the city input object from page
    // PRIVATE VARIABLES | END
}