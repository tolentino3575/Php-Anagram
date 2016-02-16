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
    }

?>
