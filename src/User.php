<?php

    class User {
        private $username;
        private $password;
        private $first_name;
        private $last_name;
        private $status;
        private $kink_friendly;
        private $birthday;
        private $email;
        private $about_me;
        private $interests;
        private $seeking_relationship_type;
        private $last_login;
        private $city_id;
        private $zip_code_id;
        private $id;

        public function __construct($username, $password, $first_name, $last_name, $status, $kink_friendly = 1, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login = null, $city_id = null, $zip_code_id = null, $id = null) {
            $this->username = $username;
            $this->password = $password;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->status = $status;
            $this->kink_friendly = $kink_friendly;
            $this->birthday = $birthday;
            $this->email = $email;
            $this->about_me = $about_me;
            $this->interests = $interests;
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
            $GLOBALS['DB']->exec("INSERT INTO users (username, password, first_name, last_name, status, kink_friendly, birthday, email, about_me, interests, seeking_relationship_type, last_login, city_id, zip_code_id) VALUES ('{$this->getUsername()}', '{$this->getPassword()}', '{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getStatus()}', {$this->getKinkFriendly()}, '{$this->getBirthday()}', '{$this->getEmail()}', '{$this->getAboutMe()}', '{$this->getInterests()}', '{$this->getSeekingRelationshipType()}', '{$this->getLastLogin()}', {$this->getCityId()}, {$this->getZipCodeId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        public function updateFirstName($new_first_name) {
            $GLOBALS['DB']->exec("UPDATE users SET first_name = '{$new_first_name}' WHERE id = {$this->getId()};");
            $this->setFirstName($new_first_name);
        }
        public function deleteProfile() {
            $GLOBALS['DB']->exec("DELETE FROM users WHERE id = {$this->getId()}");
            $GLOBALS['DB']->exec("DELETE FROM relationships WHERE user_id_one = {$this->getId()} OR user_id_two = {$this->getId()};");
            $GLOBALS['DB']->exec("DELETE FROM messages_users WHERE user_id = {$this->getId()};");
        }

        public function getIdentities() {
            $returned_identities = $GLOBALS['DB']->query("SELECT identities.* FROM users
            JOIN identities_users ON (users.id = identities_users.user_id)
            JOIN identities ON (identities_users.identity_id = identities.id)
            WHERE user_id = {$this->getId()};");
            $identities = array();
            foreach ($returned_identities as $identity) {
                $id = $identity['id'];
                $name = $identity['name'];
                $description = $identity['description'];
                $new_identity = new Identity($name, $description, $id);
                array_push($identities, $new_identity);
            }
            return $identities;
        }

        public function addSeekingGender($gender) {
            $GLOBALS['DB']->exec("INSERT INTO seeking_genders (user_id, identity_id) VALUES ({$this->getId()}, {$gender->getId()});");
        }

        public function getSeekingGenders() {
            $returned_seeking_genders = $GLOBALS['DB']->query("SELECT identities.* FROM users
            JOIN seeking_genders ON (users.id = seeking_genders.user_id)
            JOIN identities ON (seeking_genders.identity_id = identities.id)
            WHERE user_id = {$this->getId()};");
            $seeking_genders = array();
            foreach ($returned_seeking_genders as $seeking_gender) {
                $id = $seeking_gender['id'];
                $name = $seeking_gender['name'];
                $description = $seeking_gender['description'];
                $new_seeking_gender = new Identity($name, $description, $id);
                array_push($seeking_genders, $new_seeking_gender);
            }
            return $seeking_genders;
        }

        public function getSeekingGendersNames() {
            $seeking_genders = $this->getSeekingGenders();
            $seeking_gender_names = array();
            foreach ($seeking_genders as $gender) {
                array_push($seeking_gender_names, $gender->getName());
            }
            $seeking_gender_names = implode(", ", $seeking_gender_names);
            return $seeking_gender_names;
        }

        public function getIdentitiesNames() {
            $seeking_identities = $this->getSeekingGenders();
            $seeking_identity_names = array();
            foreach ($seeking_identities as $identity) {
                array_push($seeking_identity_names, $identity->getName());
            }
            $seeking_identity_names = implode(", ", $seeking_identity_names);
            return $seeking_identity_names;
        }

        public function addIdentity($identity) {
            $GLOBALS['DB']->exec("INSERT INTO identities_users (user_id, identity_id) VALUES ({$this->getId()}, {$identity->getId()});");
        }

        public function getMessages() {
            $returned_messages = $GLOBALS['DB']->query("SELECT messages.* FROM users
            JOIN messages_users ON (users.id = messages_users.user_id)
            JOIN messages ON (messages_users.message_id = messages.id)
            WHERE user_id = {$this->getId()};");
            $messages = array();
            foreach ($returned_messages as $message) {
                $description = $message['description'];
                $id = $message['id'];
                $new_message = new Message($description, $id);
                array_push($messages, $new_message);
            }
            return $messages;
        }

        public function sendMessage($user_id_two, $description) {
            $new_message = new Message($description);
            $new_message->save();
            $GLOBALS['DB']->exec("INSERT INTO messages_users (user_id, message_id) VALUES ({$this->getId()}, {$new_message->getId()});");
            $GLOBALS['DB']->exec("INSERT INTO messages_users (user_id, message_id) VALUES ({$user_id_two}, {$new_message->getId()});");
        }

        public function askRelationship() {

        }

        public function acceptRelationship($user_two) {
            $response = null;
            if ($response) {
                $GLOBALS['DB']->exec("INSERT INTO relationships (user_id_one, user_id_two) VALUES ({$this->getId()}, {$user_two->getId()});");
            } else {
                return 'This person denies';
            }
        }

        public function getCityName() {
            $city = City::find($this->getCityId());
            return $city->getName();
        }

        public function getStateName() {
            $city = City::find($this->getCityId());
            return $city->getState();
        }

        public function getZipCode() {
            $zip_code = ZipCode::find($this->getZipCodeId());
            return $zip_code->getZipNumber();
        }

        public function getImages() {
            $returned_images = $GLOBALS['DB']->query("SELECT * FROM images WHERE user_id = {$this->getId()};");
            $images = array();
            foreach ($returned_images as $image) {
                $title = $image['title'];
                $description = $image['description'];
                $user_id = $image['user_id'];
                $id = $image['id'];
                $url = $image['url'];
                $new_image = new Image($title, $description, $user_id, $url, $id);
                array_push($images, $new_image);
            }
            return $images;
        }

        //Static Fucntions;

        static function signIn($username, $password) {
            $all_users = User::getAll();
            $found_user = null;
            foreach ($all_users as $user) {
                if ($user->getUsername() == $username && $user->getPassword() == $password) {
                    $found_user = $user;
                    array_push($_SESSION['user'], $username);
                    array_push($_SESSION['user'], $user->getId());
                    return $found_user;
                }
            }
                array_push($_SESSION['user'], -1);
                array_push($_SESSION['user'], -1);
                return 'Incorrect Username or Password';

        }

        static function signOut() {
            $_SESSION['user'] = array();
            return 'You have successfully signed out.';
        }

        static function getAll() {
            $returned_users = $GLOBALS['DB']->query("SELECT * FROM users;");
            $users = array();
            foreach ($returned_users as $user) {
                $username = $user['username'];
                $password = $user['password'];
                $first_name = $user['first_name'];
                $last_name = $user['last_name'];
                $status = $user['status'];
                $kink_friendly = $user['kink_friendly'];
                $birthday = $user['birthday'];
                $email = $user['email'];
                $about_me = $user['about_me'];
                $interests = $user['interests'];
                $seeking_relationship_type = $user['seeking_relationship_type'];
                $last_login = $user['last_login'];
                $city_id = $user['city_id'];
                $zip_code_id = $user['zip_code_id'];
                $id = $user['id'];
                $new_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id, $id);
                array_push($users, $new_user);
            }
            return $users;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM users");
        }

        static function basicSearch($identity, $city_id) {
            $all_users = User::getAll();
            $found_users = array();
            foreach ($all_users as $user) {
                $user_seeking = $user->getSeekingGenders();
                foreach ($user_seeking as $seeking) {
                    if ($identity == $seeking) {
                        array_push($found_users, $user);
                    }
                }
            }
            $found_users2 = array();
            foreach($found_users as $user) {
                if ($city_id == $user->getCityId()) {
                    array_push($found_users2, $user);
                }
            }
            return $found_users2;
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
