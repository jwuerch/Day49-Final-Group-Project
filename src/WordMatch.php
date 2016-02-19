<?php
    class WordMatch {
      function checkMatch($word, $phrase) {
        foreach (str_split($word) as $char) {
          if (preg_match('/[!#;@._?,]/', $char)) {
            return 'Please enter a word without punctuation.';
          }
        }
        $phrase = strtolower(preg_replace('/[!#;@,._?]+/u', '', $phrase));
        $phrase = explode(' ', $phrase);
        $counter = 0;
        foreach ($phrase as $each_word) {
          if ($each_word == $word) {
            $counter++;
          }
        }
        return $counter;
      }
    }
?>
