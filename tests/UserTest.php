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
    require_once "src/Identity.php";
    require_once "src/Message.php";
    require_once "src/Identity.php";
    require_once "src/Image.php";

    class UserTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {
            User::deleteAll();
            City::deleteAll();
            ZipCode::deleteAll();
            Message::deleteAll();
            Identity::deleteAll();
            Image::deleteAll();
            $_SESSION['user'] = array();
        }

        function testgetUsername() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getUsername();

            //Assert;
            $this->assertEquals($username, $result);
        }

        function testgetPassword() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getPassword();

            //Assert;
            $this->assertEquals($password, $result);
        }

        function testGetFirstName() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getFirstName();

            //Assert;
            $this->assertEquals($first_name, $result);
        }

        function testStatus() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);
            //Act;
            $result = $test_user->getStatus();

            //Assert;
            $this->assertEquals($status, $result);
        }

        function testKinkFriendly() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getKinkFriendly();

            //Assert;
            $this->assertEquals($kink_friendly, $result);
        }

        function testBirthday() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getBirthday();

            //Assert;
            $this->assertEquals($birthday, $result);
        }

        function testGetLastName() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getLastName();

            //Assert;
            $this->assertEquals($last_name, $result);
        }

        function testGetEmail() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getEmail();

            //Assert;
            $this->assertEquals($email, $result);
        }

        function testGetAboutMe() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getAboutMe();

            //Assert;
            $this->assertEquals($about_me, $result);
        }

        function testGetInterests() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getInterests();

            //Assert;
            $this->assertEquals($interests, $result);
        }

        function testGetSeekingRelationshipType() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

            //Act;
            $result = $test_user->getSeekingRelationshipType();

            //Assert;
            $this->assertEquals($seeking_relationship_type, $result);
        }

        function testGetLastLogin() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);

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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();

            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id);

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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = true;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

            //Act;
            $result = $test_user->getZipCodeId();

            //Assert;
            $this->assertEquals($zip_code_id, $result);
        }

        function testSave() {
            //Arrange;
            $username = 'jwuerch';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 2;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);

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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();
            $test_user2 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $new_first_name = 'Johnny';
            $test_user->updateFirstName($new_first_name);
            $result = $test_user->getFirstName();

            //Assert;
            $this->assertEquals($new_first_name, $result);
        }


        function testBasicSearch() {
            //Arrange;

            $name = 'Portland';
            $state = 'Oregon';
            $test_city = new City($name, $state);
            $test_city->save();

            $name2 = 'Seattle';
            $state2 = 'WA';
            $test_city2 = new City($name, $state);
            $test_city2->save();

            $name = 'Spokane';
            $state = 'WA';
            $test_city3 = new City($name, $state);
            $test_city3->save();

            $number = 97201;
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($number, $city_id);
            $test_zip_code->save();

            $name = 'Male';
            $description = 'Male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name2 = 'Female';
            $description2 = 'Female';
            $test_identity2 = new Identity($name2, $description2);
            $test_identity2->save();

            $name3 = 'Transgender';
            $description2 = 'Transgender';
            $test_identity3 = new Identity($name2, $description2);
            $test_identity3->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();


            $test_user = new User('Jason', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city->getId(), $zip_code_id);
            $test_user->save();
            $test_user->addSeekingGender($test_identity3);

            $test_user2 = new User('John', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city->getId(), $zip_code_id);
            $test_user2->save();
            $test_user->addSeekingGender($test_identity2);

            $test_user3 = new User('Max', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city->getId(), $zip_code_id);
            $test_user3->save();
            $test_user3->addSeekingGender($test_identity);

            $test_user4 = new User('Beth', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city->getId(), $zip_code_id);
            $test_user4->save();
            $test_user4->addSeekingGender($test_identity);

            $test_user5 = new User('Michael', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city3->getId(), $zip_code_id);
            $test_user5->save();
            $test_user5->addSeekingGender($test_identity2);

            $test_user6 = new User('Sara', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city3->getId(), $zip_code_id);
            $test_user6->save();
            $test_user6->addSeekingGender($test_identity3);

            $test_user7 = new User('Hilary', $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $test_city3->getId(), $zip_code_id);
            $test_user7->save();
            $test_user7->addSeekingGender($test_identity);

            //Act;
            $search_term = $test_identity;
            $city_id = $test_city->getId();
            $result = User::basicSearch($test_identity, $city_id);
            //Assert;
            $this->assertEquals([$test_user3, $test_user4], $result);
        }

        function testDeleteProfile() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $id2 = 2;
            $test_user2 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id, $id);
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
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            $result = User::find($test_user2->getId());

            //Assert;
            $this->assertEquals($test_user2, $result);
        }


        function testAddIdentity() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $name = 'male';
            $description = 'description';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            //Act;
            $test_user->addIdentity($test_identity);
            $result = $test_user->getIdentities();
            //Assert;
            $this->assertEquals($test_identity, $result[0]);
        }

        function testGetIdentities() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $name = 'male';
            $description = 'description';
            $test_identity = new Identity($name, $description);
            $test_identity->save();
            $description2 = 'description2';
            $test_identity2 = new Identity($name, $description2);
            $test_identity2->save();
            $test_user->addIdentity($test_identity);
            $test_user->addIdentity($test_identity2);

            //Act;
            $result = $test_user->getIdentities();
            //Assert;
            $this->assertEquals([$test_identity, $test_identity2], $result);
        }
        function testSendMessage() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $username2 = 'Johnny';
            $test_user2 = new User($username2, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            //Act;
            $description = 'hi friend';
            $test_user->sendMessage($test_user2->getId(), $description);
            $result = $test_user->getMessages();
            $result2 = $test_user2->getMessages();

            //Assert;
            $this->assertEquals('hi friend', $result[0]->getDescription());
            $this->assertEquals('hi friend', $result2[0]->getDescription());
        }

        function testGetMessages() {
            //Arrange;
            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = 1;
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $username2 = 'Johnny';
            $test_user2 = new User($username2, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            $description = 'hi friend';

            $test_user->sendMessage($test_user2->getId(), $description);

            //Act;
            $test_message1 = $test_user->getMessages()[0];
            $result1 = $test_user->getMessages();
            $result2 = $test_message1->getDescription();
            $result3 = $test_user2->getMessages();
            //Assert;
            $this->assertEquals($test_message1, $result1[0]);
            $this->assertEquals('hi friend', $result2);
            $this->assertEquals($test_message1, $result3[0]);
        }

        function testGetCityName() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $result = $test_user->getCityName();

            //Assert;
            $this->assertEquals($test_city->getName(), $result);
        }

        function testGetStateName() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = 1;
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $result = $test_user->getStateName();

            //Assert;
            $this->assertEquals($test_city->getState(), $result);
        }

        function testGetZipCode() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $result = $test_user->getZipCode();

            //Assert;
            $this->assertEquals($test_zip_code->getZipNumber(), $result);
        }

        function testAddSeekingGender() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $test_user->addSeekingGender($test_identity);
            $result = $test_user->getSeekingGenders();

            //Assert;
            $this->assertEquals($test_identity, $result[0]);
        }

        function testAddSeekingGender2() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name = 'male';
            $description = 'male';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $test_user->addSeekingGender($test_identity);
            $result = $test_user->getSeekingGenders();

            //Assert;
            $this->assertEquals($test_identity, $result[0]);
        }

        function testAddSeekingGender3() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name = 'male';
            $description = 'male';
            $test_identity3 = new Identity($name, $description);
            $test_identity3->save();

            $name = 'male';
            $description = 'male';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $test_user->addSeekingGender($test_identity2);
            $result = $test_user->getSeekingGenders();

            //Assert;
            $this->assertEquals($test_identity2, $result[0]);
        }

        function testGetSeekingGenders() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name = 'male';
            $description = 'male';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $test_user->addSeekingGender($test_identity);
            $test_user->addSeekingGender($test_identity2);
            $result = $test_user->getSeekingGenders();

            //Assert;
            $this->assertEquals([$test_identity, $test_identity2], $result);
        }

        function testGetSeekingGenderNames() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $name = 'male';
            $description = 'male';
            $test_identity2 = new Identity($name, $description);
            $test_identity2->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();
            $test_user->addSeekingGender($test_identity);
            $test_user->addSeekingGender($test_identity2);

            //Act;
            $result = $test_user->getSeekingGendersNames();

            //Assert;
            $this->assertEquals('male, male', $result);
        }

        function testSignIn() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            //Act;
            $result = User::signIn($username, $password);
            $result2 = User::signIn('JMonkeyy', $password);
            $result3 = User::signIn($username, 'dasfdas');
            User::signIn($username, $password);
            $result4 = $_SESSION['user'] = array($username, $password);


            //Assert;
            $this->assertEquals($test_user, $result);
            $this->assertEquals('Incorrect Username or Password', $result2);
            $this->assertEquals('Incorrect Username or Password', $result3);
            $this->assertEquals([$username, $password], $result4);
        }

        function testSignOut() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $test_user2 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user2->save();

            $test_user3 = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user3->save();

            //Act;
            User::signIn($username, $password);
            $result = User::signOut();

            //Assert;
            $this->assertEquals('You have successfully signed out.', $result);
        }
        function testGetImages() {
            //Arrange;

            $name = 'Seattle';
            $state = 'WA';
            $test_city = new City($name, $state);
            $test_city->save();

            $zip_number = '97201';
            $city_id = $test_city->getId();
            $test_zip_code = new ZipCode($zip_number, $city_id);
            $test_zip_code->save();

            $name = 'male';
            $description = 'male';
            $test_identity = new Identity($name, $description);
            $test_identity->save();

            $username = 'jmonkey';
            $password = 'xyz';
            $first_name = 'Jason';
            $status = 'Single';
            $kink_friendly = 1;
            $birthday = '1989-03-07';
            $last_name = 'JMoney';
            $email = 'wuerchjason@gmail.com';
            $about_me = 'I am friendly.';
            $interests = 'Basketball, Tennis';
            $seeking_gender = 'Female';
            $seeking_relationship_type = 'Primary Partner';
            $last_login = '1989-03-07';
            $city_id = $test_city->getId();
            $zip_code_id = $test_zip_code->getId();
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login, $city_id, $zip_code_id);
            $test_user->save();

            $title = 'hello';
            $description = 'description';
            $user_id = $test_user->getId();
            $test_image = new Image($title, $description, $user_id);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id);
            $test_image2->save();

            //Act;
            $result = $test_user->getImages();

            //Assert;
            $this->assertEquals([$test_image, $test_image2], $result);
        }



    }


?>
