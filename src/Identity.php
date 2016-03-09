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

        //Public Functions
        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO identities (name, description) VALUES ('{$this->getName()}', '{$this->getDescription()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        //Static Functions;
        static function getAll() {
            $returned_identities = $GLOBALS['DB']->query("SELECT * FROM identities;");
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

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM identities;");
        }

        static function find($id) {
            $all_identities = Identity::getAll();
            $found_identity = null;
            foreach ($all_identities as $identity) {
                if ($id == $identity->getId()) {
                    $found_identity = $identity;
                }
            }
            return $found_identity;
        }



    }



?>
