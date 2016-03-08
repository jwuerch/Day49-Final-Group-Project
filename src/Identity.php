<?php

    Class Identity {
        private $name;
        private $description;
        private $user_id;
        private $id;

        public function __contstruct($name, $description, $user_id, $id = null) {
            $this->name = $name;
            $this->description = $description;
            $this->user_id = $user_id;
            $this->id = $id;
        }
    }



?>
