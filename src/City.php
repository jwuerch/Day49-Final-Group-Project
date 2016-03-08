<?php

    class City {
        private $name;
        private $state;
        private $id;

        public function __construct($name, $state, $id = null) {
            $this->name = $name;
            $this->state = $state;
            $this->id = $id;
        }

        //Setters
        public function setName($new_name) {
            $this->name = $new_name;
        }
        public function setState($new_state) {
            $this->state = $new_state;
        }
        //Getters
        public function getName() {
            return $this->name;
        }
        public function getState() {
            return $this->state;
        }
        public function getId() {
            return $this->id;
        }

        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO cities (name, state) VALUES ('{$this->getName()}', '{$this->getState()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        public function delete() {
            $GLOBALS['DB']->exec("DELETE FROM cities WHERE id = {$this->getId()};");
        }

        //Static Functions;
        static function getAll() {
            $returned_cities = $GLOBALS['DB']->query("SELECT * FROM cities;");
            $cities = array();
            foreach ($returned_cities as $city) {
                $id = $city['id'];
                $name = $city['name'];
                $state = $city['state'];
                $new_city = new City($name, $state, $id);
                array_push($cities, $new_city);
            }
            return $cities;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM cities;");
        }

        static function searchByName($search_term) {
            $all_cities = City::getAll();
            $cities = array();
            foreach($all_cities as $city) {
                if ($search_term[0] == $city->getName()[0]) {
                    array_push($cities, $city);
                }
            }
            return $cities;
        }

        static function find($city_id) {
            $found_city = null;
            $all_cities = City::getAll();
            foreach ($all_cities as $city) {
                if ($city_id == $city->getId()) {
                    $found_city = $city;
                }
            }
            return $found_city;
        }


    }


 ?>
