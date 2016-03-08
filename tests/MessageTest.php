<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Message.php";

    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class MessageTest extends PHPUnit_Framework_TestCase {

        // protected function tearDown() {
        //     Message::deleteAll();
        // }

        function testGetDescription() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);

            //Act;
            $result = $test_message->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }


    }


?>
