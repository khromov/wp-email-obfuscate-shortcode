<?php
//TODO: Perform actual tests
//require_once "../email-obfuscate-shortcode.php";

class EOS_Test extends PHPUnit_Framework_TestCase
{
    // test the talk method
    public function testTest() {
        $expected = array(1,2,3,4);
        $test = function() {
            return [1,2,3,4];
        };
        $this->assertEquals($expected, $test());
    }
}