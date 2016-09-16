<?php
    class RepeatCounter
    {
        function countRepeats($searchInput, $findInput)
        {
            $repeatCounter = 0;
            $searchArray = explode(" ", $searchInput);
            foreach ($searchArray as $word) {
                // Remove quotation marks before searching
                $word = str_replace("\"", "", $word);
                // Test for match, then remove punctuation that might interfere with a match and test again
                if ($findInput == $word ||
                $findInput == preg_replace('([?!.,\'])', "", $word)) {
                    $repeatCounter++;
                }
            }
            return $repeatCounter;
        }
    }
 ?>
