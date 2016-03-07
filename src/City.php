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
    }


 ?>
