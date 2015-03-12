<?php
    require_once "src/scrabbleGame.php";

    class scrabbleTest extends PHPUnit_Framework_TestCase
    {

        function test_playScrabble_A()
        {
        //Arrange
        $test_playScrabble = new scrabbleGame;
        $input= "A";

        //Act
        $result = $test_playScrabble->playScrabble($input);

        //Assert
        $this->assertEquals("1",$result);
    }

        function test_playScrabble_AE()
        {
        //Arrange
        $test_playScrabble_AE = new scrabbleGame;
        $input= "A,E";

        //Act
        $result = $test_playScrabble_AE->playScrabble($input);

        //Assert
        $this->assertEquals("2",$result);
    }

        function test_playScrabble_DG()
        {
        //Arrange
        $test_playScrabble_DG = new scrabbleGame;
        $input= "D,G";

        //Act
        $result = $test_playScrabble_DG->playScrabble($input);

        //Assert
        $this->assertEquals("4",$result);
        }



        function test_playScrabble_AG()
        {
        //Arrang
        $test_playScrabble_AG = new scrabbleGame;
        $input = "A,G";
        //Act
        $result = $test_playScrabble_AG->playscrabble($input);
        //Assert
        $this->assertEquals("3",$result);

    }

        function test_playScrabble_TBQ()
        {
        //Arrang
        $test_playScrabble_AG = new scrabbleGame;
        $input = "T,B,Q";
        //Act
        $result = $test_playScrabble_AG->playscrabble($input);
        //Assert
        $this->assertEquals("24",$result);

   }
}


















?>
