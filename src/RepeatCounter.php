<?php
    class RepeatCounter
    {
        function countRepeats($searchInput, $findInput)
        {
            $repeatCounter = 0;
            $searchArray = explode(" ", $searchInput);
            foreach ($searchArray as $word) {
                if ($word == $findInput) {
                    $repeatCounter++;
                }
            }
            return $repeatCounter;
        }
    }
 ?>
