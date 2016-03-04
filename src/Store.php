<?php

    class Store {
        private $name;
        private $location;
        private $id;

        public function __construct($name, $location, $id) {
            $this->name = $name;
            $this->location = $location;
            $this->id = $id;
        }
    }

?>
