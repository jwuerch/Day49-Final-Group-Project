<?php

    class Store {
        private $name;
        private $location;
        private $id;

        public function __construct($name, $location, $id = null) {
            $this->name = $name;
            $this->location = $location;
            $this->id = $id;
        }

        //Setters;
        public function setName($name) {
            $this->name = $name;
        }

        public function setLocation($location) {
            $this->location = $location;
        }

        //Getters;
        public function getName() {
            return $this->name;
        }

        public function getLocation() {
            return $this->location;
        }

        public function getId() {
            return $this->id;
        }
    }

?>
