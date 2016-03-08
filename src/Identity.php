<?php

    Class Identity {
        private $name;
        private $description;
        private $id;

        public function __construct($name, $description, $id = null) {
            $this->name = $name;
            $this->description = $description;
            $this->id = $id;
        }

        //Setters;
        public function setName($name) {
            $this->name = $name;
        }
        public function setDescription($description) {
            $this->description = $description;
        }
        //Getters;
        public function getName() {
            return $this->name;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getId() {
            return $this->id;
        }


    }



?>
