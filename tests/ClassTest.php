<?php
    require_once 'src/WordMatch.php';

    class WordMatchTest extends PHPUnit_Framework_TestCase
    {
      function test_Example()
      {
        //Arrange;
        $matcher = new WordMatch;
        $input1 = '';
        $input2 = 'I eat a banana';

        //Act;
        $result = $word->checkMatch($input1, $input2);

        //Assert;
        $this->assertEquals(0, $result);

      }



    }


?>
