<?php
    require_once 'src/WordMatch.php';

    class WordMatchTest extends PHPUnit_Framework_TestCase
    {
      function test_Check_Blank_Strings()
      {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = '';
        $input2 = 'I eat a banana';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(0, $result);
      }

      function test_Check_Spaces_Dont_Count() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = ' ';
        $input2 = 'I eat a banana';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(0, $result);
      }

      function test_One_Letter_Words() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'a';
        $input2 = 'I eat a banana';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(1, $result);
      }

      function test_Multiple_Letter_Words() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'a';
        $input2 = 'I eat a banana';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(1, $result);
      }





    }


?>
