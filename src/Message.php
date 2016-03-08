<?php

    class Message {
        private $description;
        private $user_id_one;
        private $user_id_two;
        private $id;

        public function __construct($description, $user_id_one, $user_id_two, $id = null) {
            $this->description = $description;
            $this->user_id_one = $user_id_one;
            $this->user_id_two = $user_id_two;
            $this->id = $id;
        }

        //Setters;
        public function setDescription($description) {
            $this->description = $description;
        }
        public function setUserIdOne($user_id_one) {
            $this->user_id_one = $user_id_one;
        }
        public function setUserIdTwo($user_id_two) {
            $this->user_id_two = $user_id_two;
        }

        //Getters;
        public function getDescription() {
            return $this->description;
        }
        public function getUserIdOne() {
            return $this->user_id_one;
        }
        public function getUserIdTwo() {
            return $this->user_id_two;
        }
        public function getId() {
            return $this->id;
        }

    }




 ?>
