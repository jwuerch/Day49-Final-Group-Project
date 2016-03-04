<?php

    class Brand {
        private $name;
        private $id;

        public function __construct($name, $id = null) {
            $this->name = $name;
            $this->id = $id;
        }

        //Setters;
        public function setName($new_name) {
            $this->name = $new_name;
        }

        //Getters;
        public function getName() {
            return $this->name;
        }

        public function getId() {
            return $this->id;
        }
    }

 ?>
