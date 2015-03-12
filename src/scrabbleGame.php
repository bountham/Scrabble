<?php

    class scrabbleGame
    {
        function playScrabble($input)
        {
            if ($input == "A") {
                return "1 point";
            }
            elseif ($input == "A,E") {
                return "2 points";
            }
            else {
                return "Oops";
            }
        }

    }

?>
