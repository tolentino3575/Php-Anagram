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
    }

?>
