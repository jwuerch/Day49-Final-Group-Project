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
            City::deleteAll();
        }

        function testGetName() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $result = $test_city->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testGetState() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $result = $test_city->getState();

            //Assert;
            $this->assertEquals($state, $result);
        }
        function testGetId() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $id = 1;
            $test_city = new City($name, $state, $id);

            //Act;
            $result = $test_city->getId();

            //Assert;
            $this->assertEquals($id, $result);
        }

        function testSave() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);

            //Act;
            $test_city->save();
            $result = City::getAll();

            //Assert;
            $this->assertEquals($test_city, $result[0]);
        }

        function testGetAll() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'Washington';
            $test_city2 = new City($name2, $state2);
            $test_city2->save();

            //Act;
            $result = City::getAll();

            //Assert;
            $this->assertEquals([$test_city, $test_city2], $result);
        }

        function testDeleteAll() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'Washington';
            $test_city2 = new City($name2, $state2);
            $test_city2->save();

            //Act;
            City::deleteAll();
            $result = City::getAll();

            //Assert;
            $this->assertEquals([], $result);
        }

        function testDelete() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'Washington';
            $test_city2 = new City($name2, $state2);
            $test_city2->save();

            //Act;
            $test_city->delete();
            $result = City::getAll();

            //Assert;
            $this->assertEquals([$test_city2], $result);
        }

        function testSearchCityByName() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'Washington';
            $test_city2 = new City($name2, $state2);
            $test_city2->save();

            $name3 = 'Spokane';
            $state3 = 'Washington';
            $test_city3 = new City($name3, $state3);
            $test_city3->save();

            //Act;
            $search_term = 'Smithsville';
            $result = City::searchByName($search_term);

            //Assert;
            $this->assertEquals([$test_city2, $test_city3], $result);
        }

        function testFind() {
            //Arrange;
            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'Washington';
            $test_city2 = new City($name2, $state2);
            $test_city2->save();

            $name3 = 'Spokane';
            $state3 = 'Washington';
            $test_city3 = new City($name3, $state3);
            $test_city3->save();

            //Act;
            $id = $test_city2->getId();
            $result = City::find($id);

            //Assert;
            $this->assertEquals($test_city2, $result);
        }

    }

?>
