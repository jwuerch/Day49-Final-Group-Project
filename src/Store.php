<?php

    class Store {
        private $name;
        private $location;
        private $id;

        public function __construct($name, $location, $id = null) {
            $this->name = $name;
            $this->location = $location;
            $this->id = $id;
        }

        //Setters;
        public function setName($name) {
            $this->name = $name;
        }

        public function setLocation($location) {
            $this->location = $location;
        }

        //Getters;
        public function getName() {
            return $this->name;
        }

        public function getLocation() {
            return $this->location;
        }

        public function getId() {
            return $this->id;
        }

        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO stores (name, location) VALUES ('{$this->getName()}', '{$this->getLocation()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        public function update($new_name, $new_location) {
            $GLOBALS['DB']->exec("UPDATE stores SET name = '{$new_name}', location = '{$new_location}' WHERE id = {$this->getId()};");
            $this->setName($new_name);
            $this->setLocation($new_location);
        }

        static function getAll() {
            $returned_stores = $GLOBALS['DB']->query("SELECT * FROM stores;");
            $stores = array();
            foreach ($returned_stores as $store) {
                $id = $store['id'];
                $location = $store['location'];
                $name = $store['name'];
                $new_store = new Store($name, $location, $id);
                array_push($stores, $new_store);
            }
            return $stores;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM stores;");
        }


    }

?>
