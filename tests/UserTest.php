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

        function testgetUsername() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getUsername();

            //Assert;
            $this->assertEquals($username, $result);
        }

        function testgetPassword() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getPassword();

            //Assert;
            $this->assertEquals($password, $result);
        }

        function testgetIdentity() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getIdentity();

            //Assert;
            $this->assertEquals($identity, $result);
        }

        function testGetName() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getName();

            //Assert;
            $this->assertEquals($name, $result);
        }

        function testStatus() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);
            //Act;
            $result = $test_user->getStatus();

            //Assert;
            $this->assertEquals($status, $result);
        }

        function testKinkFriendly() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getKinkFriendly();

            //Assert;
            $this->assertEquals($kink_friendly, $result);
        }

        function testbirthday() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getBirthday();

            //Assert;
            $this->assertEquals($birthday, $result);
        }

        function testGetDisplayName() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getDisplayName();

            //Assert;
            $this->assertEquals($display_name, $result);
        }

        function testGetEmail() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getEmail();

            //Assert;
            $this->assertEquals($email, $result);
        }

        function testGetAboutMe() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getAboutMe();

            //Assert;
            $this->assertEquals($about_me, $result);
        }

        function testGetGender() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getGender();

            //Assert;
            $this->assertEquals($gender, $result);
        }

        function testGetInterests() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getInterests();

            //Assert;
            $this->assertEquals($interests, $result);
        }

        function testGetSeekingGender() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getSeekingGender();

            //Assert;
            $this->assertEquals($seeking_gender, $result);
        }

        function testGetSeekingRelationshipType() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getSeekingRelationshipType();

            //Assert;
            $this->assertEquals($seeking_relationship_type, $result);
        }

        function testGetLastLogin() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login);

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

            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();

            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id);

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

            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

            //Act;
            $result = $test_user->getZipCodeId();

            //Assert;
            $this->assertEquals($zip_code_id, $result);
        }

        function testSave() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $display_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $gender = 'Male';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 2;
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

            //Act;
            $test_user->save();
            $result = User::getAll();
            //Assert;
            $this->assertEquals($test_user, $result[0]);
        }

        function testGetAll() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            $result = User::getAll();
            //Assert;
            $this->assertEquals([$test_user, $test_user2], $result);
        }

        function testDeleteAll() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            User::deleteAll();
            $result = User::getAll();
            //Assert;
            $this->assertEquals([], $result);
        }

        function testUpdateName() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $new_name = 'Johnny';
            $test_user->updateName($new_name);
            $result = $test_user->getName();

            //Assert;
            $this->assertEquals($new_name, $result);
        }

        function testBasicSearch() {
            //Arrange;

            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $number = 97201;
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($number, $city_id);
            $test_zip_code->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Female', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $seeking_gender2 = 'Male';
            $test_user2 = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Male', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            $seeking_gender3 = 'Male';
            $test_user3 = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Male', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user3->save();

            //Act;
            $my_identity = 'Male';
            $city_id = $test_city->getId();
            $result = User::basicSearch($my_identity, $city_id);
            //Assert;
            $this->assertEquals([$test_user2, $test_user3], $result);
        }

        function testDeleteProfile() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $id = 1;
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Female', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $id2 = 2;
            $test_user2 = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Female', $seeking_relationship_type, $last_login, $city_id, $zip_code_id, $id);
            $test_user2->save();

            //Act;
            $test_user->deleteProfile();
            $result = User::getAll();

            //Assert;
            $this->assertEquals([$test_user2], $result);
        }

        function testFindUser() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Female', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, 'Female', $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            $result = User::find($test_user2->getId());

            //Assert;
            $this->assertEquals($test_user2, $result);
        }

        function testUpdateIdentity() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $identity = 'Male';
            $name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
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
            $id = 1;
            $test_user = new User($username, $password, $identity, $name, $status, $kink_friendly, $birthday, $display_name, $email, $about_me, $gender, $interests, $seeking_gender, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $new_identity = 'Female';
            $test_user->updateIdentity($new_identity);
            $result = $test_user->getIdentity();

            //Assert;
            $this->assertEquals($new_identity, $result);
        }
    }


?>
