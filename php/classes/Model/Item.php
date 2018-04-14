<?php

    // Item class - This class basically represents an apartment-like items
    class Item {

        private $address;
        private $price;
        private $m2;
        private $imageFileName;
        private $availabilityDate;

        // Constructor
        function __construct($itemRow) {

            // Extract information from row
            $this->address = $itemRow['ADDRESS'];
            $this->price = $itemRow['PRICE'];
            $this->m2 = $itemRow['SQUARE_METER'];
            $this->imageFileName = $itemRow['IMAGE_FILE_NAME'];
            $this->availabilityDate = $itemRow['AVAILABILITY_DATE'];

        }

        // Getters
        public function getAddress() {
            return $this->address;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getM2() {
            return $this->m2;
        }

        public function getImageFileName() {
            return $this->imageFileName;
        }

        public function getAvailabilityDate() {
            return $this->availabilityDate;
        }

    }

?>