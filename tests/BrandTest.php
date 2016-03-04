<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Brand.php";
    $server = 'mysql:host=localhost;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BrandTest extends PHPUnit_Framework_TestCase {

        protected function teardown() {
            Brand::deleteAll();

        }

        function testGetName() {
            //Arrange;
            $name = 'Adidas';
            $test_brand = new Brand($name);

            //Act;
            $result = $test_brand->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testGetId() {
            //Arrange;
            $name = 'Adidas';
            $id = 1;
            $test_brand = new Brand($name, $id);

            //Act;
            $result = $test_brand->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange;
            $name = 'Adidas';
            $id = 1;
            $test_brand = new Brand($name, $id);

            //Act;
            $test_brand->save();
            $result = Brand::getAll();

            //Arrange;
            $this->assertEquals($test_brand, $result[0]);

        }

        function testGetAll() {
            //Arrange;
            $name = 'Adidas';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'Nike';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act;
            $result = Brand::getAll();

            //Assert;
            $this->assertEquals([$test_brand, $test_brand2], $result);
        }

        function testDeleteAll() {
            //Arrange;
            $name = 'Adidas';
            $id = 1;
            $test_brand = new Brand($name, $id);
            $test_brand->save();

            $name2 = 'Nike';
            $id2 = 2;
            $test_brand2 = new Brand($name2, $id2);
            $test_brand2->save();

            //Act;
            Brand::deleteAll();
            $result = Brand::getAll();

            //Assert;
            $this->assertEquals([], $result);

        }

    }


?>
