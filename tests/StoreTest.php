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

        protected function teardown() {
            Store::deleteAll();

        }

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

        function testGetId() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St';
            $id = 1;
            $test_brand = new Store($name, $location, $id);

            //Act;
            $result = $test_brand->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St.';
            $test_store = new Store($name, $location);

            //Act;
            $test_store->save();
            $result = Store::getAll();

            //Arrange;
            $this->assertEquals($test_store, $result[0]);
        }

        function testGetAll() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St.';
            $test_store = new Store($name, $location);
            $test_store->save();

            $name2 = 'Zapatos2';
            $location2 = '111 NW St.';
            $test_store2 = new Store($name2, $location2);
            $test_store2->save();

            //Act;
            $result = Store::getAll();

            //Assert;
            $this->assertEquals([$test_store, $test_store2], $result);
        }


        function testDeleteAll() {
            //Arrange;
            $name = 'Zapatos';
            $location = '111 SW St.';
            $test_store = new Store($name, $location);
            $test_store->save();

            $name2 = 'Zapatos2';
            $location2 = '111 NW St.';
            $test_store2 = new Store($name2, $location2);
            $test_store2->save();

            //Act;
            Store::deleteAll();
            $result = Store::getAll();

            //Assert;
            $this->assertEquals([], $result);

        }



    }


?>
