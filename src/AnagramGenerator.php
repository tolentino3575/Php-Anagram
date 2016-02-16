<?php

    class AnagramGenerator
    {
        function wordOutput($input_word)
        {
            return $input_word;
        }

        function arrayOutput($input_word)
        {
            return str_split($input_word);
        }

        function sortOutput($input_word)
        {
            $sortWord = str_split($input_word);
            $sortedWord = sort($sortWord);
            return $sortWord;
        }

        function matchOutput($input_word1, $input_word2)
        {
            $sortWord1 = str_split($input_word1);
            $sortedWord1 = sort($sortWord1);
            $sortWord2 = str_split($input_word2);
            $sortedWord2 = sort($sortWord2);
            return $sortWord1 == $sortWord2;
        }

    }

?>
