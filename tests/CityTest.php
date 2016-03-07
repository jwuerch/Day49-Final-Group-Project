<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    require_once "src/City.php";

    class CityTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {
            City::deleteAll();
        }

        function testGetName() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $result = $test_city->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testGetState() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $result = $test_city->getState();

            //Assert;
            $this->assertEquals($state, $result);
        }
        function testGetId() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $id = 1;
            $test_city = new City($name, $state, $id);

            //Act;
            $result = $test_city->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $test_city->save();
            $result = City::getAll();

            //Assert;
            $this->assertEquals($test_city, $result[0]);
        }
    }

?>
