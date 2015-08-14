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
    }
?>
