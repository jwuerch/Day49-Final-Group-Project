<?php

    class ZipCode {
        private $zip_number;
        private $city_id;
        private $id;

        public function __construct($zip_number, $city_id, $id = null) {
            $this->zip_number = $zip_number;
            $this->city_id = $city_id;
            $this->id = $id;
        }

        //Setters
        public function setZipNumber($new_number) {
            $this->zip_number = $new_number;
        }
        //Getters
        public function getZipNumber() {
            return $this->zip_number;
        }
        public function getCityId() {
            return $this->city_id;
        }
        public function getId() {
            return $this->id;
        }

        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO zip_codes (zip_number, city_id) VALUES ({$this->getZipNumber()}, {$this->getCityId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        static function getAll() {
            $returned_zip_codes = $GLOBALS['DB']->query("SELECT * FROM zip_codes;");
            $zip_codes = array();
            foreach ($returned_zip_codes as $zip_code) {
                $id = $zip_code['id'];
                $city_id = $zip_code['city_id'];
                $zip_number = $zip_code['zip_number'];
                $new_zip_code = new ZipCode($zip_number, $city_id, $id);
                array_push($zip_codes, $new_zip_code);
            }
            return $zip_codes;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM zip_codes;");
        }

        static function find($zip_id) {
            $all_zip_codes = ZipCode::getAll();
            $found_zip = null;
            foreach ($all_zip_codes as $zip_code) {
                if ($zip_id == $zip_code->getId()) {
                    $found_zip = $zip_code;
                }
            }
            return $found_zip;
        }
    }


 ?>
