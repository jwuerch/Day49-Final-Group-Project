<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Image.php";
    require_once "src/User.php";
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ImageTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {

        }

        function testgetTitle() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $result = $test_image->getTitle();

            //Assert;
            $this->assertEquals($title, $result);
        }

        function testgetDescription() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $result = $test_image->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }


    }


?>
