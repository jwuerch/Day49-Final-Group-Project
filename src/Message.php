<?php

    class Message {
        private $description;
        private $id;

        public function __construct($description, $id = null) {
            $this->description = $description;
            $this->id = $id;
        }

        //Setters;
        public function setDescription($description) {
            $this->description = $description;
        }

        //Getters;
        public function getDescription() {
            return $this->description;
        }
        public function getId() {
            return $this->id;
        }

        //Public Functions;


    }




 ?>
