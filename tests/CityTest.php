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

        }

        public function testGetName() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $result = $test_city->getName();

            //Assert;
            $this->assertEquals($name, $result);

        }
    }

?>
