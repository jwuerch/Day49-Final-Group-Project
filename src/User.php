<?php

    class User {
        private $username;
        private $password;
        private $identity;
        private $first_name;
        private $last_name;
        private $status;
        private $kink_friendly;
        private $birthday;
        private $email;
        private $about_me;
        private $interests;
        private $seeking_gender;
        private $seeking_relationship_type;
        private $last_login;
        private $city_id;
        private $zip_code_id;
        private $id;

        public function __construct($username, $password, $identity = null, $first_name, $last_name, $status, $kink_friendly = 1, $birthday, $email, $about_me, $interests, $seeking_gender, $seeking_relationship_type, $last_login = null, $city_id = null, $zip_code_id = null, $id = null) {
            $this->username = $username;
            $this->password = $password;
            $this->identity = $identity;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->status = $status;
            $this->kink_friendly = $kink_friendly;
            $this->birthday = $birthday;
            $this->email = $email;
            $this->about_me = $about_me;
            $this->interests = $interests;
            $this->seeking_gender = $seeking_gender;
            $this->seeking_relationship_type = $seeking_relationship_type;
            $this->last_login = $last_login;
            $this->zip_code_id = $zip_code_id;
            $this->city_id = $city_id;
            $this->id = $id;
        }

        //Setters
        public function setUsername($username) {
            $this->username = $username;
        }
        public function setPassword($password) {

        }
        public function setIdentity($new_identity) {
            $this->identity = $new_identity;
        }
        public function setFirstName($new_first_name) {
            $this->first_name = $new_first_name;
        }
        public function setLastName($new_last_name) {
            $this->last_name = $new_last_name;
        }
        public function setStatus($new_status) {
            $this->status = $new_status;
        }
        public function setKinkFriendly($new_kink_friendly) {
            $this->kink_friendly = $new_kink_friendly;
        }
        public function setBirthday($new_birthday) {
            $this->birthday = $new_birthday;
        }
        public function setEmail($new_email) {
            $this->email = $new_email;
        }
        public function setAboutMe($new_about_me) {
            $this->about_me = $new_about_me;
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
            $this->city_id = $city;
        }

        //Getters
        public function getUsername() {
            return $this->username;
        }
        public function getPassword() {
            return $this->password;
        }
        public function getIdentity() {
            return $this->identity;
        }
        public function getFirstName() {
            return $this->first_name;
        }
        public function getLastName() {
            return $this->last_name;
        }
        public function getStatus() {
            return $this->status;
        }
        public function getKinkFriendly() {
            return $this->kink_friendly;
        }
        public function getBirthday() {
            return $this->birthday;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getAboutMe() {
            return $this->about_me;
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
            $GLOBALS['DB']->exec("INSERT INTO users (username, password, identity, first_name, last_name, status, kink_friendly, birthday, email, about_me, interests, seeking_gender, seeking_relationship_type, last_login, city_id, zip_code_id) VALUES ('{$this->getUsername()}', '{$this->getPassword()}', '{$this->getIdentity()}', '{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getStatus()}', {$this->getKinkFriendly()}, '{$this->getBirthday()}', '{$this->getEmail()}', '{$this->getAboutMe()}', '{$this->getInterests()}', '{$this->getSeekingGender()}', '{$this->getSeekingRelationshipType()}', '{$this->getLastLogin()}', {$this->getCityId()}, {$this->getZipCodeId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        public function updateFirstName($new_first_name) {
            $GLOBALS['DB']->exec("UPDATE users SET first_name = '{$new_first_name}' WHERE id = {$this->getId()};");
            $this->setFirstName($new_first_name);
        }
        public function deleteProfile() {
            $GLOBALS['DB']->exec("DELETE FROM users WHERE id = {$this->getId()}");
            $GLOBALS['DB']->exec("DELETE FROM relationships WHERE user_id_one = {$this->getId()} OR user_id_two = {$this->getId()};");
        }

        public function UpdateIdentity($new_identity) {
            $GLOBALS['DB']->exec("UPDATE users SET identity = {$new_identity} WHERE id = {$this->getId()};");
            $this->setIdentity($new_identity);
        }

        //Static Fucntions;
        static function getAll() {
            $returned_users = $GLOBALS['DB']->query("SELECT * FROM users;");
            $users = array();
            foreach ($returned_users as $user) {
                $username = $user['username'];
                $password = $user['password'];
                $identity = $user['identity'];
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $status = $user['status'];
                $kink_friendly = $user['kink_friendly'];
                $birthday = $user['birthday'];
                $email = $user['email'];
                $about_me = $user['about_me'];
                $interests = $user['interests'];
                $seeking_gender = $user['seeking_gender'];
                $seeking_relationship_type = $user['seeking_relationship_type'];
                $last_login = $user['last_login'];
                $city_id = $user['city_id'];
                $zip_code_id = $user['zip_code_id'];
                $id = $user['id'];
                $new_user = new User($username, $password, $identity, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id, $id);
                array_push($users, $new_user);
            }
            return $users;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM users");
        }

        static function basicSearch($my_identity, $city_id) {
            $returned_users = User::getAll();
            $found_users = array();
            foreach ($returned_users as $user) {
                if ($my_identity == $user->getSeekingGender() && $city_id == $user->getCityId()) {
                    array_push($found_users, $user);
                }
            }
            return $found_users;
        }

        static function find($search_id) {
            $returned_users = User::getAll();
            $found_user = null;
            foreach ($returned_users as $user) {
                if ($search_id == $user->getId()) {
                    $found_user = $user;
                }
             }
             return $found_user;
        }







    }



 ?>
