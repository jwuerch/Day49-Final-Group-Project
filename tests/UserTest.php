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

    class UserTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {

        }

        function testgetIdentity() {
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
            $result = $test_user->getAge();

            //Assert;
            $this->assertEquals($age, $result);
        }
    }


?>
