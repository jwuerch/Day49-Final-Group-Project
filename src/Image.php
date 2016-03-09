<?php

    class Image {
        private $title;
        private $description;
        private $user_id;
        private $id;

        public function __construct($title, $description, $user_id, $id = null) {
            $this->title = $title;
            $this->description = $description;
            $this->user_id = $user_id;
            $this->id = $id;
        }
        //Setters;
        public function setTitle($title) {
            $this->title = $title;
        }
        public function setDescription($description) {
            $this->description = $description;
        }

        //Getters;
        public function getTitle() {
            return $this->title;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getUserId() {
            return $this->user_id;
        }
        public function getId() {
            return $this->id;
        }


    }




 ?>
