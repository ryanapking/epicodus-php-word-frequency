<?php
    require_once _DIR__.'/../src/RepeatCounter.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_matchingStrings()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchInput = "simple";
            $findInput = "simple";
            // Act
            $result = $test_RepeatCounter->countRepeats($searchInput, $findInput);
            // Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
