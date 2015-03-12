<?php

    class scrabbleGame
    {
        function playScrabble($input)
        {
        $string=strtolower($input);
        $scrabble_1point = array("a","e");

        if(in_array($string,$scrabble_1point))
        {

            return "it works";
        }


        //     if ($input == "A") {
        //         return "1";
        //     }
        //     elseif ($input == "A,E") {
        //         return "2";
        //     }
        //     elseif ($input == "D,G") {
        //         return "4";
        //     }
        //     elseif ($input == "A,G"){
        //         return "3";
        //     }
        //     elseif ($input == "T,B,Q")
        //         return "24";
        //     else {
        //         return "Oops";
        //     }
        // }

    }
}

?>
