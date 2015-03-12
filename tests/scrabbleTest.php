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
        $this->assertEquals("1 point",$result);
    }

        function test_playScrabble_AE()
        {
        //Arrange
        $test_playScrabble_AE = new scrabbleGame;
        $input= "A E";

        //Act
        $result = $test_playScrabble_AE->playScrabble($input);

        //Assert
        $this->assertEquals("2 point",$result);
    }

    }

?>
