<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Image.php";
    require_once "src/User.php";
    $server = 'mysql:host=localhost;dbname=poly_date_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ImageTest extends PHPUnit_Framework_TestCase {

        protected function tearDown() {
            Image::deleteAll();
        }

        function testgetTitle() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $result = $test_image->getTitle();

            //Assert;
            $this->assertEquals($title, $result);
        }

        function testgetDescription() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $result = $test_image->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }

        function testgetImage() {
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

            $title = 'Me';
            $description = '';
            $user_id = $test_user->getId();
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $result = $test_image->getUserId();

            //Assert;
            $this->assertEquals($user_id, $result);
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
            $test_user = new User($username, $password, $first_name, $last_name, $status, $kink_friendly, $birthday, $email, $about_me, $interests, $seeking_relationship_type, $last_login);
            $test_user->save();

            $title = 'Me';
            $description = '';
            $user_id = $test_user->getId();
            $test_image = new Image($title, $description, $user_id);

            //Act;
            $test_image->save();
            $result = Image::getAll();

            //Assert;
            $this->assertEquals($test_image, $result[0]);
        }

        function testGetAll() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $test_image = new Image($title, $description, $user_id);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id);
            $test_image2->save();

            //Act;
            $result = Image::getAll();

            //Assert;
            $this->assertEquals([$test_image, $test_image2], $result);

        }


    }


?>
