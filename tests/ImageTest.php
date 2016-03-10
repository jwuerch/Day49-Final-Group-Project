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
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);

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
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);

            //Act;
            $result = $test_image->getDescription();

            //Assert;
            $this->assertEquals($description, $result);
        }

        function testgetUserId() {
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
            $url = 'text';
            $user_id = $test_user->getId();
            $test_image = new Image($title, $description, $user_id, $url);

            //Act;
            $result = $test_image->getUserId();

            //Assert;
            $this->assertEquals($user_id, $result);
        }

        function testGetUrl() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);

            //Act;
            $result = $test_image->getUrl();

            //Assert;
            $this->assertEquals($url, $result);
        }

        function testGetId() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $url = 'text';
            $id = 1;
            $test_image = new Image($title, $description, $user_id, $url, $id);

            //Act;
            $result = $test_image->getId();

            //Assert;
            $this->assertEquals($id, $result);

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
            $description = 'asdf';
            $user_id = $test_user->getId();
            $url = 'hello';
            $test_image = new Image($title, $description, $user_id, $url);

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
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id, $url);
            $test_image2->save();

            //Act;
            $result = Image::getAll();

            //Assert;
            $this->assertEquals([$test_image, $test_image2], $result);
        }

        function testDeleteAll() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id, $url);
            $test_image2->save();

            //Act;
            Image::deleteAll();
            $result = Image::getAll();

            //Assert;
            $this->assertEquals([], $result);
        }

        function testFindImage() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id, $url);
            $test_image2->save();

            //Act;
            $result = Image::find($test_image2->getId());

            //Assert;
            $this->assertEquals($test_image2, $result);
        }

        function testDeleteImage() {
            //Arrange;
            $title = 'Me';
            $description = '';
            $user_id = 1;
            $url = 'text';
            $test_image = new Image($title, $description, $user_id, $url);
            $test_image->save();
            $test_image2 = new Image($title, $description, $user_id, $url);
            $test_image2->save();

            //Act;
            $test_image2->delete();
            $result = Image::getAll();

            //Assert;
            $this->assertEquals([$test_image], $result);
        }





    }


?>
