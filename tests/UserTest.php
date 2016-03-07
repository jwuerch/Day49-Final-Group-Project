<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    require_once "src/User.php";
    require_once "src/City.php";
    require_once "src/ZipCode.php";

    class UserTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {
            User::deleteAll();
        }

        function testgetIdentity() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getIdentity();

            //Assert;
            $this->assertEquals($identity, $result);
        }

        function testGetName() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testStatus() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getStatus();

            //Assert;
            $this->assertEquals($status, $result);
        }

        function testKinkFriendly() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getKinkFriendly();

            //Assert;
            $this->assertEquals($kink_friendly, $result);
        }

        function testAge() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getAge();

            //Assert;
            $this->assertEquals($age, $result);
        }

        function testGetDisplayName() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getDisplayName();

            //Assert;
            $this->assertEquals($display_name, $result);
        }

        function testGetEmail() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getEmail();

            //Assert;
            $this->assertEquals($email, $result);
        }

        function testGetAboutMe() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getAboutMe();

            //Assert;
            $this->assertEquals($about_me, $result);
        }

        function testGetGender() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getGender();

            //Assert;
            $this->assertEquals($gender, $result);
        }

        function testGetInterests() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getInterests();

            //Assert;
            $this->assertEquals($interests, $result);
        }

        function testGetSeekingGender() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getSeekingGender();

            //Assert;
            $this->assertEquals($seeking_gender, $result);
        }

        function testGetSeekingRelationshipType() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getSeekingRelationshipType();

            //Assert;
            $this->assertEquals($seeking_relationship_type, $result);
        }

        function testGetLastLogin() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getLastLogin();

            //Assert;
            $this->assertEquals($last_login, $result);
        }

        function testGetCityId() {
            //Arrange;
            $city_name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($city_name, $state);

            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();

            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id);

            //Act;
            $result = $test_user->getCityId();

            //Assert;
            $this->assertEquals($city_id, $result);
        }

        function testGetZipCodeId() {
            //Arrange;
            $city_name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($city_name, $state);

            $number = 97201;
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($number, $city_id);

            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

            //Act;
            $result = $test_user->getZipCodeId();

            //Assert;
            $this->assertEquals($zip_code_id, $result);
        }

        function testSave() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

            //Act;
            $test_user->save();
            $result = User::getAll();
            //Assert;
            $this->assertEquals($test_user, $result[0]);
        }

        function testGetAll() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            $result = User::getAll();
            //Assert;
            $this->assertEquals([$test_user, $test_user2], $result);
        }

        function testDeleteAll() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            User::deleteAll();
            $result = User::getAll();
            //Assert;
            $this->assertEquals([], $result);
        }

        function testUpdateName() {
            //Arrange;
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $age = 27;
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($identity, $name, $status, $kink_friendly, $age, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $new_name = 'Johnny';
            $test_user->updateName($new_name);
            $result = $test_user->getName();

            //Assert;
            $this->assertEquals($new_name, $result);
        }
    }


?>
