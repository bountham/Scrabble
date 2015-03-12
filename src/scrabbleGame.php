<?php

    class scrabbleGame
    {
        function playScrabble($input)
        {
       $all_array = array("a"=>1,"e"=>1,"i"=>1,"o"=>1,"u"=>1,"l"=>1,"n"=>1,"r"=>1,"s"=>1,
       "t"=>1,"d"=>2,"g"=>2,"b"=>3, "c"=>3,"m"=>3,"p"=>3,"f"=>4,"h"=>4,"v"=>4,"w"=>4,"y"=>4,"k"=>4,"j"=>8,"x"=>8,"q"=>10,"z"=>10);




         if ($input == ''){

             return "Please enter in a word";
         }
         else{
             $string_letter = str_split(strtolower($input));
             $scrabble = 0;
             foreach($string_letter as $letter){
             $scrabble += $all_array[$letter];

             }
             return $scrabble;
         }




   }




 }


?>
