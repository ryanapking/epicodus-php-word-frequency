<?php
    class RepeatCounter
    {
        function countRepeats($searchInput, $findInput)
        {
            $repeatCounter = 0;
            $searchArray = explode(" ", $searchInput);
            foreach ($searchArray as $word) {
                if ($findInput == $word ||
                $findInput == preg_replace('([?!.,\'"])', "", $word)) {
                    $repeatCounter++;
                }
            }
            return $repeatCounter;
        }
    }
 ?>
