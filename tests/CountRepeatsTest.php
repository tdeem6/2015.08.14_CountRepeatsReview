<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {

        function test_lowerCaseText()
        {
            $test_CountRepeats = new CountRepeats;
            $input = "Loop";

            $result = $test_CountRepeats->lowerCaseText($input);


            $this->AssertEquals("loop", $result);
        }

        function test_lowerCasePhrase()
        {
            $test_CountRepeats = new CountRepeats;
            $input = "How many times am I going to loop through this loop before I'm done with this loop?";

            $result = $test_CountRepeats->lowerCasePhrase($input);

            $this->AssertEquals("how many times am i going to loop through this loop before i'm done with this loop?", $result);
        }
    }
?>
