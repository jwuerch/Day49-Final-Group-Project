<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Store.php";
    $server = 'mysql:host=localhost;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StoreTest extends PHPUnit_Framework_TestCase {

        // protected function teardown() {
        //     Shoe::deleteAll();
        //
        // }

        function testGetName() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St';
            $test_brand = new Store($name, $location);

            //Act;
            $result = $test_brand->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testGetLocation() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St';
            $test_brand = new Store($name, $location);

            //Act;
            $result = $test_brand->getLocation();

            //Assert;
            $this->assertEquals($location, $result);
        }

    }


?>
