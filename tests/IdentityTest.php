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

        function testGetAll() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name ='male';
            $description = 'description';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            //Act;
            $result = Identity::getAll();

            //Assert;
            $this->assertEquals([$test_identity, $test_identity2], $result);
        }

        function testDeleteAll() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name ='male';
            $description = 'description';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            //Act;
            Identity::deleteAll();
            $result = Identity::getAll();

            //Assert;
            $this->assertEquals([], $result);
        }

        function testFind() {
            //Assert;
            $name ='male';
            $description = 'description';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name ='male';
            $description = 'description';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            $name ='male';
            $description = 'description';
            $test_identity3 = new Identity($name, $description);
            $test_identity3->save();

            //Act;
            $result = Identity::find($test_identity2->getId());

            //AssertEquals;
            $this->assertEquals($test_identity2, $result);
        }

    }

?>
