function URL() {

    // PRIVATE FUNCTIONS | START
    function getHost() {
        return javascriptConfiguration.dreamHouseRootFolder;
    }

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
            return paramString.substring(0, paramString.length - 1);
        }
        
    }
    // PRIVATE FUNCTIONS | END

    // PRIVILEGED FUNCTIONS | START
    this.getURL = function() {

        if(path == "") {
            return host;
        } else {

            var params = getParams();
            
            if(params == null) {
                return host + "/" + path;
            } else {
                return host + "/" + path + "?" + params;
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
    var host = getHost(); // E.G. "giovarco.heliohost.org"
    var path = "";
    var paramList = {};
    // PRIVATE VARIABLES | END

}