<?php
require_once "src/Palindrome.php";

class  PalindromeTest  extends PHPUnit_Framework_TestCase {

    function test_checkPalindrome_true() {
        //arrange
        $new_palindrome = new Palindrome;
        $input = "noon";

        //act
        $result = $new_palindrome->checkPalindrome($input);

        //assert
        $this->assertEquals(true, $result);
    }


}
 ?>

input: noon
output: true

input burger
output: false
