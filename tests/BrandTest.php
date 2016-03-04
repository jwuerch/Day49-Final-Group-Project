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

    class BookTest extends PHPUnit_Framework_TestCase {

        // protected function {
        //
        // }

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

    }


?>
