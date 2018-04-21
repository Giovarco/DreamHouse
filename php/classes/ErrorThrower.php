<?php
    class ErrorThrower {

        private static $productionErrorMessage;
        private static $productionErrorMessageHtml;

        public static function init() {
            self::$productionErrorMessage = "Whoops! This is embarassing, but an error occurred. Please contact the adminitrator.";
            self::$productionErrorMessageHtml = "<h1>".self::$productionErrorMessage."</h1>";
        }

        public static function send404Error($errorMessage = "A generic 404 error occurred and no details are given") {
            if(IS_LOCAL_ENVIRONMENT) {
                throw new Exception($errorMessage);
            } else {
                self::sendErrorAndDie(404);
            } 
        }

        public static function send500Error($errorMessage = "A generic 500 error occurred and no details are given") {
            if(IS_LOCAL_ENVIRONMENT) {
                throw new Exception($errorMessage);
            } else {
                self::sendErrorAndDie(500);
            } 
        }

        private static function sendErrorAndDie($statusCode) {
            http_response_code($statusCode);
            echo self::$productionErrorMessageHtml;
            die();
        }

    }
?>