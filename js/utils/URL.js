// URL class - This class is an utility class to create URL
function URL() {

    // PRIVATE FUNCTIONS | START
    function getHost() {

        // Check if it is local environment
        if(location.host === "localhost") {
            return "localhost/DreamHouse";
        } else {
            return location.host;
        }
        
    }

    /*
        This functions returns a string that contains parameters and their relative values.
        This string will be attached to URL.
    */
    function getParams() {

        var paramString = "";

        for (var paramName in paramList){
            if (paramList.hasOwnProperty(paramName)) {
                var paramValue = paramList[paramName];
                paramString += (paramName + "=" + paramValue + "&");
            }
        }

        if(paramString == "") {
            return null;
        } else {
            // Remove last & from returned value
            return paramString.substring(0, paramString.length - 1);
        }
        
    }
    // PRIVATE FUNCTIONS | END

    // PRIVILEGED FUNCTIONS | START
    this.getURL = function() {

        if(path == "") {
            return protocol + "//" + host;
        } else {

            var params = getParams();
            
            if(params == null) {
                return protocol + "//" + host + "/" + path;
            } else {
                return protocol + "//" + host + "/" + path + "?" + params;
            }

        }

    }

    this.addParameter = function(name, value) {
        paramList[name] = value;
    }

    this.addPath = function(_path) {
        path = _path;
    }
    // PRIVILEGED FUNCTIONS | END

    // PRIVATE VARIABLES | START
    var protocol = document.location.protocol; // e.g. https:
    var host = getHost();
    var path = "";
    var paramList = {};
    // PRIVATE VARIABLES | END

}