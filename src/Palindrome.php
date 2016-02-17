<?php
class Palindrome {

// BREAKS OUR TESTS FOR SOME REASON

    // private $word_input;
    //
    // function __construct($new_word_input)
    // {
    //     $this->word_input = $new_word_input;
    // }
    //
    // function setWordInput($new_word_input)
    // {
    //     $this->word_input = $new_word_input;
    // }
    //
    // function getWordInput()
    // {
    //     return $this->word_input;
    // }

    function checkPalindrome($word_input) {
        $reversedInput = strrev($word_input);

        if ($word_input == $reversedInput) {
            return "This is a palindrome";
        } else {
            return "Not a palindrome";
        }
    }
}
?>
