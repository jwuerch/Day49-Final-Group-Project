<?php

    class Message {
        private $description;
        private $id;

        public function __construct($description, $id = null) {
            $this->description = $description;
            $this->id = $id;
        }

        //Setters;
        public function setDescription($description) {
            $this->description = $description;
        }

        //Getters;
        public function getDescription() {
            return $this->description;
        }
        public function getId() {
            return $this->id;
        }

        //Public Functions;
        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO messages (description) VALUES ('{$this->getDescription()}');");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }

        //Static Functions;
        static function getAll() {
            $returned_messages = $GLOBALS['DB']->query("SELECT * FROM messages;");
            $messages = array();
            foreach ($returned_messages as $message) {
                $id = $message['id'];
                $description = $message['description'];
                $new_message = new Message($description, $id);
                array_push($messages, $new_message);
            }
            return $messages;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM messages;");
        }

        public function delete() {
            $GLOBALS['DB']->exec("DELETE FROM messages WHERE id = {$this->getId()};");
            $GLOBALS['DB']->exec("DELETE FROM messages_users WHERE message_id = {$this->getId()};");
        }

    }




 ?>
