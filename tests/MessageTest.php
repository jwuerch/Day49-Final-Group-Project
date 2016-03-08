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

        protected function tearDown() {
            Message::deleteAll();
        }

        function testGetDescription() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);

            //Act;
            $result = $test_message->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }

        function testGetId() {
            //Arrange;
            $description = 'text';
            $id = 1;
            $test_message = new Message($description, $id);

            //Act;
            $result = $test_message->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);

            //Act;
            $test_message->save();
            $result = Message::getAll();


            //Assert;
            $this->assertEquals($test_message, $result[0]);
        }

        function testDeleteAll() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);
            $test_message->save();
            $test_message2 = new Message($description);
            $test_message2->save();

            //Act;
            Message::deleteAll();
            $result = Message::getAll();


            //Assert;
            $this->assertEquals([], $result);
        }

        function testGetAll() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);
            $test_message->save();
            $test_message2 = new Message($description);
            $test_message2->save();

            //Act;
            $result = Message::getAll();


            //Assert;
            $this->assertEquals([$test_message, $test_message2], $result);
        }

        function testDelete() {
            //Arrange;
            $description = 'text';
            $test_message = new Message($description);
            $test_message->save();
            $test_message2 = new Message($description);
            $test_message2->save();

            //Act;
            $test_message->delete();
            $result = Message::getAll();

            //Assert;
            $this->assertEquals([$test_message2], $result);
        }


    }


?>
