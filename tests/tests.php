<?php
//require_once "../email-obfuscate-shortcode.php";

function test_me() {
    return 5;
}

class EOS_Test extends PHPUnit_Framework_TestCase
{
    // test the talk method
    public function testTest() {
        $this->assertEquals($expected, test_me());
    }
}
