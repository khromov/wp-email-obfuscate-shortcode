<?php
//TODO: Perform actual tests
//require_once "../email-obfuscate-shortcode.php";

class EOS_Test extends PHPUnit_Framework_TestCase
{
    public function testTest() {
        $expected = 6;

        $test = function (int ...$ints) {
            return array_sum($ints);
        };

        $this->assertEquals($expected, $test(1,2,3));
    }
}