<?php

    class User {
        private $identity;
        private $name;
        private $status;
        private $kink_friendly;
        private $age;
        private $display_name;
        private $email;
        private $about_me;
        private $gender;
        private $interests;
        private $seeking_gender;
        private $seeking_relationship_type;
        private $last_login;
        private $city_id;
        private $zip_code_id;
        private $id;

        public function __construct($identity, $name, $status, $kink_friendly = true, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id = null, $zip_code_id = null, $id = null) {
            $this->identity = $identity;
            $this->name = $name;
            $this->status = $status;
            $this->kink_friendly = $kink_friendly;
            $this->age = $age;
            $this->display_name = $display_name;
            $this->email = $email;
            $this->about_me = $about_me;
            $this->gender = $gender;
            $this->interests = $interests;
            $this->seeking_gender = $seeking_gender;
            $this->seeking_relationship_type = $seeking_relationship_type;
            $this->last_login = $last_login;
            $this->zip_code_id = $zip_code_id;
            $this->city_id = $city_id;
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
            $GLOBALS['DB']->exec("INSERT INTO users (identity, name, status, kink_friendly, age, display_name, email) VALUES ('{$this->getIdentity()}', '{$this->getName()}', '{$this->getStatus()}', {$this->getKinkFriendly()}, {$this->getAge()}, '{$this->getDisplayName()}', '{$this->getEmail()}', '{$this->getAboutMe()}');");
            $GLOBALS['DB']->exec("INSERT INTO users (about_me, gender, interests, seeking_gender, seeking_relationship_type, last_login, city_id, zip_code_id) VALUES '{$this->getAboutMe()}', '{$this->getGender()}', '{$this->getInterests()}', '{$this->getSeekingGender()}', '{$this->getSeekingRelationshipType()}', '{$this->getLastLogin()}', '{$this->getCityId()}', '{$this->getZipCodeId()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }
    }



 ?>
