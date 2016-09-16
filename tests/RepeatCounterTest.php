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

        function test_countRepeats_multipleFoundInstances()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchInput = "This test isn't much of a test";
            $findInput = "test";
            // Act
            $result = $test_RepeatCounter->countRepeats($searchInput, $findInput);
            // Assert
            $this->assertEquals(2, $result);
        }

        function test_countRepeats_ignorePartialMatches()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchInput = "Concatenate this please";
            $findInput = "cat";
            // Act
            $result = $test_RepeatCounter->countRepeats($searchInput, $findInput);
            // Assert
            $this->assertEquals(0, $result);
        }

        function test_countRepeats_ignorePunctuation()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $searchInput = "Will it find 'this?' despite the punctuation?";
            $findInput = "this";
            // Act
            $result = $test_RepeatCounter->countRepeats($searchInput, $findInput);
            // Assert
            $this->assertEquals(1, $result);
        }
    }
 ?>
