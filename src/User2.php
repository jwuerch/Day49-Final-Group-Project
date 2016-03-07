<?php

    class User {
        private $identity;
        private $name;
        private $status;
        private $age;
        private $kink_friendly;
        private $display_name;

        private $id;

        public function __construct($identity, $name, $status, $age, $kink_friendly = true, $id = null) {
            $this->identity = $identity;
            $this->name = $name;
            $this->status = $status;
            $this->age = $age;
            $this->kink_friendly;
            $this->id = $id;
        }

        //Setters
        public function setIdentity($new_identity) {
            $this->identity = $new_identity;
        }
        public function setName($new_name) {
            $this->name = $new_name;
        }
        public function setStatus($new_status) {
            $this->status = $new_status;
        }
        public function setKinkFriendly($new_kink_friendly) {
            $this->kink_friendly = $new_kink_friendly;
        }
        public function setAge($new_age) {
            $this->age = $new_age;
        }
        public function setDisplayName($new_display_name) {
            $this->display_name = $new_display_name;
        }
        public function setEmail($new_email) {
            $this->email = $new_email;
        }
        public function setAboutMe($new_about_me) {
            $this->about_me = $new_about_me;
        }
        public function setGender($new_gender) {
            $this->gender = $new_gender;
        }
        public function setInterests($new_interests) {
            $this->interests = $interests;
        }
        public function setSeekingGender($new_seeking_gender) {
            $this->seeking_gender = $new_seeking_gender;
        }
        public function setSeekingRelationshipType($new_seeking_relationship_type) {
            $this->seeking_relationship_type = $new_seeking_relationship_type;
        }
        public function setLastLogin($new_login) {
            $this->lastLogin = $new_login;
        }
        public function setZipCodeId($zip_code_id) {
            $this->zip_code_id = $zip_code_id;
        }
        public function setCityId($city_id) {
            $this->city_id = $city_id;
        }

        //Getters
        public function getIdentity() {
            return $this->identity;
        }
        public function getName() {
            return $this->name;
        }
        public function getStatus() {
            return $this->status;
        }
        public function getKinkFriendly() {
            return $this->kink_friendly;
        }
        public function getAge() {
            return $this->age;
        }
        public function getDisplayName() {
            return $this->display_name;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getAboutMe() {
            return $this->about_me;
        }
        public function getGender() {
            return $this->gender;
        }
        public function getInterests() {
            return $this->interests;
        }
        public function getSeekingGender() {
            return $this->seeking_gender;
        }
        public function getSeekingRelationshipType() {
            return $this->seeking_relationship_type;
        }
        public function getLastLogin() {
            return $this->last_login;
        }
        public function getCityId() {
            return $this->city_id;
        }
        public function getZipCodeId() {
            return $this->zip_code_id;
        }
        public function getId() {
            return $this->id;
        }

        //Public Functions;
        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO users (identity, name, status, age, kink_friendly) VALUES ('{$this->getIdentity()}', '{$this->getName()}', '{$this->getStatus()}', {$this->getAge()}), {$this->getKinkFriendly()};");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        //Static Fucntions;
        static function getAll() {
            $returned_users = $GLOBALS['DB']->query("SELECT * FROM users;");
            var_dump($returned_users);
            $users = array();
            foreach ($returned_users as $user) {
                $identity = $user['identity'];
                $name = $user['name'];
                $status = $user['status'];
                $age = $user['age'];
                $kink_friendly = $user['kink_friendly'];
                $id = $user['id'];
                $new_user = new User($identity, $name, $status, $age, $kink_friendly, $id);
                array_push($users, $new_user);
            }
            return $users;

        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM users");
        }

    }



 ?>
