<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_AnagramGenerator_Word()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "the";

            //Act
            $result = $test_AnagramGenerator->wordOutput($input);

            //Assert
            $this->assertEquals("the", $result);
        }

        function test_AnagramGenerator_Array()
        {
            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "cat";

            //Act
            $result = $test_AnagramGenerator->arrayOutput($input);

            //Assert
            $this->assertEquals(array('c', 'a', 't'), $result);
        }


        function test_AnagramGenerator_Sort()
        {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input = "the";

            //Act
            $result = $test_AnagramGenerator->sortOutput($input);

            //Assert
            $this->assertEquals(array('e', 'h', 't'), $result);

        }

        function test_AnagramGenerator_Match()
        {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input1 = "pig";
            $possibleArray = array("pig", "pug", "gip");

            //Act
            $result = $test_AnagramGenerator->matchOutput($input1, $possibleArray);

            //Assert
            $this->assertEquals(array('pig', 'gip'), $result);

        }
    }

?>
