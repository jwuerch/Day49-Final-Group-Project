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

        protected function tearDown() {
            Identity::deleteAll();
        }

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

        function testGetId() {
            //Assert;
            $name ='male';
            $description = 'description';
            $id = 1;
            $test_identity = new Identity($name, $description, $id);

            //Act;
            $result = $test_identity->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);

            //Act;
            $test_identity->save();
            $result = Identity::getAll();

            //Assert;
            $this->assertEquals($test_identity, $result[0]);
        }

    }

?>
