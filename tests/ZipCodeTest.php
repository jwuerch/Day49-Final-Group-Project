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
    require_once "src/City.php";

    class ZipCodeTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {
            ZipCode::deleteAll();
        }

        function testGetZipNumber() {
            //Arrange
            $zip_number = 97210;
            $city_id = 1;
            $test_zip_code = new ZipCode($zip_number, $city_id);

            //Act;
            $result = $test_zip_code->getZipNumber();

            //Assert;
            $this->assertEquals($zip_number, $result);
        }

        function testGetCityId() {
            //Arrange
            $city_name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($city_name, $state);

            $number = 97210;
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($number, $city_id);

            //Act;
            $result = $test_zip_code->getCityId();

            //Assert;
            $this->assertEquals($city_id, $result);
        }

        function testGetId() {
            //Arrange
            $city_name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($city_name, $state);

            $number = 97210;
            $city_id = $test_city->getId();
            $id = 1;
            $test_zip_code = new ZipCode($number, $city_id, $id);

            //Act;
            $result = $test_zip_code->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange
            $zip_number = 97210;
            $city_id = 2;
            $test_zip_code = new ZipCode($zip_number, $city_id);

            //Act;
            $test_zip_code->save();
            $result = ZipCode::getAll();

            //Assert;
            $this->assertEquals($test_zip_code, $result[0]);
        }

        function testgetAll() {
            //Arrange
            $zip_number = 97210;
            $city_id = 2;
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $zip_number2 = 97772;
            $city_id2 = 1;
            $test_zip_code2 = new ZipCode($zip_number2, $city_id2);
            $test_zip_code2->save();

            //Act;
            $result = ZipCode::getAll();

            //Assert;
            $this->assertEquals([$test_zip_code, $test_zip_code2], $result);
        }

        function testDeleteAll() {
            //Arrange
            $zip_number = 97210;
            $city_id = 2;
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $zip_number2 = 97772;
            $city_id2 = 1;
            $test_zip_code2 = new ZipCode($zip_number2, $city_id2);
            $test_zip_code2->save();

            //Act;
            ZipCode::deleteAll();
            $result = ZipCode::getAll();

            //Assert;
            $this->assertEquals([], $result);
        }

        function testFind() {
            //Arrange
            $zip_number = 97210;
            $city_id = 2;
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $zip_number2 = 97772;
            $city_id2 = 1;
            $test_zip_code2 = new ZipCode($zip_number2, $city_id2);
            $test_zip_code2->save();

            //Act;
            $result = ZipCode::find($test_zip_code2->getId());

            //Assert;
            $this->assertEquals($test_zip_code2, $result);
        }
    }

?>
