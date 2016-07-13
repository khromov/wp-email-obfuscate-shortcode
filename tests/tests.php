<?php
//TODO: Perform actual tests
//require_once "../email-obfuscate-shortcode.php";

class EOS_Test extends PHPUnit_Framework_TestCase
{
    public function testTest() {

        /*
        $expected = 6;

        $test = function (int ...$ints) {
            return array_sum($ints);
        };
        */
        $test = 2+3;
        $expected = 5;

        $this->assertEquals($expected, $test);
    }
}