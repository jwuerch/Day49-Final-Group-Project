<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    require_once "src/ZipCode.php";

    class ZipCodeTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {

        }

        function testGetNumber() {
            //Arrange
            $number = 97210;
            $city_id = 1;
            $test_zip_code = new ZipCode($number, $city_id);

            //Act;
            $result = $test_zip_code->getNumber();

            //Assert;
            $this->assertEquals($number, $result);
        }
    }

?>
