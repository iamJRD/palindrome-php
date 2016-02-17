<?php
class Palindrome {

// BREAKS OUR TESTS FOR SOME REASON

    private $word_input;

    function __construct($new_word_input)
    {
        $this->word_input = $new_word_input;
    }

    function setWordInput($new_word_input)
    {
        $this->word_input = $new_word_input;
    }

    function getWordInput()
    {
        return $this->word_input;
    }

    function checkPalindrome($word_input) {

        $lowerCaseInput = strtolower($word_input);
        $alphaOnlyInput = preg_replace("/[^a-z0-9]/i", " ", $lowerCaseInput);

        $reversedInput = strrev($alphaOnlyInput);

        if ($alphaOnlyInput == $reversedInput) {
            return "This is a palindrome";
        } else {
            return "Not a palindrome";
        }
    }
}
?>
