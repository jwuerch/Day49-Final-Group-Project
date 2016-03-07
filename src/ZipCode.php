<?php

    class ZipCode {
        private $number;
        private $city_id;
        private $id;

        public function __construct($number, $city_id, $id = null) {
            $this->number = $number;
            $this->city_id = $city_id;
            $this->id = $id;
        }

        //Setters
        public function setNumber($new_number) {
            $this->number = $new_number;
        }
        //Getters
        public function getNumber() {
            return $this->number;
        }
        public function getCityId() {
            return $this->city_id;
        }
        public function getId() {
            return $this->id;
        }
    }


 ?>
