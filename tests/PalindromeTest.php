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
        $this->assertEquals("This is a palindrome", $result);
    }

    function test_checkPalindrome_false() {
        //arrange
        $new_palindrome = new Palindrome;
        $input = "dog";

        //act
        $result = $new_palindrome->checkPalindrome($input);

        //assert
        $this->assertEquals("Not a palindrome", $result);
    }
}
 ?>
