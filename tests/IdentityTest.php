<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    require_once "src/Identity.php";

    class IdentityTest extends PHPUnit_Framework_TestCase {

        // protected function tearDown() {
        //     City::deleteAll();
        // }

        function testGetName() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);

            //Act;
            $result = $test_identity->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testGetDescription() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);

            //Act;
            $result = $test_identity->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }

    }

?>
