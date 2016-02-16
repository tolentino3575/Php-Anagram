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

        function matchOutput($input_word, $possibleArray)
        {
            $matchedArray = array();
            $input_word = $this->sortOutput($input_word);
            foreach ($possibleArray as $possible) {
                $sorted_possible = $this->sortOutput($possible);
                if ($sorted_possible == $input_word) {
                    array_push($matchedArray, $possible);
                }
            }
            return $matchedArray;
        }
    }

?>
