<?php

    class Image {
        private $title;
        private $description;
        private $user_id;
        private $id;

        public function __construct($title, $description, $user_id, $id = null) {
            $this->title = $title;
            $this->description = $description;
            $this->user_id = $user_id;
            $this->id = $id;
        }
        //Setters;
        public function setTitle($title) {
            $this->title = $title;
        }
        public function setDescription($description) {
            $this->description = $description;
        }

        //Getters;
        public function getTitle() {
            return $this->title;
        }
        public function getDescription() {
            return $this->description;
        }
        public function getUserId() {
            return $this->user_id;
        }
        public function getId() {
            return $this->id;
        }

        public function save() {
            $GLOBALS['DB']->exec("INSERT INTO images (title, description, user_id) VALUES ('{$this->getTitle()}', '{$this->getDescription()}', {$this->getUserId()});");
            $this->id = $GLOBALS['DB']->lastInsertId();
        }
        //Static Functions;
        static function getAll() {
            $returned_images = $GLOBALS['DB']->query("SELECT * FROM images;");
            $images = array();
            foreach ($returned_images as $image) {
                $title = $image['title'];
                $description = $image['description'];
                $user_id = $image['user_id'];
                $id = $image['id'];
                $new_image = new Image($title, $description, $user_id, $id);
                array_push($images, $new_image);
            }
            return $images;
        }

        static function deleteAll() {
            $GLOBALS['DB']->exec("DELETE FROM images;");
        }

        static function find($search_id) {
            $images = Image::getAll();
            $found_image = null;
            foreach ($images as $image) {
                if ($search_id = $image->getId()) {
                    $found_image = $image;
                }
            }
            return $found_image;
        }


    }




 ?>
