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
        $input1 = 'banana';
        $input2 = 'I eat a banana';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(1, $result);
      }

      function test_Word_Appears_Twice() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'eat';
        $input2 = 'I eat a banana and I eat chicken';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(2, $result);
      }

      function test_Partial_Words() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'ea';
        $input2 = 'I eat a banana and I eat chicken';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(0, $result);
      }

      function test_Punctiation() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'banana';
        $input2 = 'I eat a banana. I eat a banana twice...!!#, I love my banana!';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(3, $result);
      }

      function test_Numbers_As_Words() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = '1';
        $input2 = 'I eat 1 banana and I eat 1 chicken. 1.';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(3, $result);
      }

      function test_Capitals_Are_Words_Too() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'the';
        $input2 = 'The. brown.,dl Dog The The ldk.!# The#@d';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(3, $result);
      }

      function test_Check_InputOne_Punctuation() {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = 'hi,';
        $input2 = 'hi there';

        //Act;
        $result = $matcher->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals("Please enter a word without punctuation.", $result);
      }
    }


?>
