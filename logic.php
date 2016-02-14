<?php
# TODO figure out how to handle when number_of_words is blank
# TODO change word array to scrape web page

    # validates number_of_words, throws exception if it is not valid
    function check_number_of_words($number, $word_list_length) {
        if ( !is_numeric($number) ) {
            throw new Exception('Number of Words must be numeric. Showing default length of 3.');
        }
        elseif ( $number > $word_list_length) {
            throw new Exception('Number of Words must be less than ' . $word_list_length . '. Showing default length of 3.');
        }
    }

    # TODO change this to scrape web page from directions for word list
    $words = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten');
    $words_length = count($words);
    $password = '';
    $password_array = [];
    $error = '';

    # check if we should use the default number of words (3), generate error if invalid
    try {
        $number_of_words = isset($_GET["number_of_words"]) ? $_GET["number_of_words"] : 3;
        check_number_of_words($number_of_words, $words_length);
    } catch (Exception $e) {
        $number_of_words = 3;
        $error = $e->getMessage();
    }

    # build the password into an array, verifying uniqueness of each word
    $x = 0;
    while ($x < $number_of_words) {
        $word = $words[rand(0, $words_length - 1)];
        while ( in_array($word, $password_array) ) {
            $word = $words[rand(0, $words_length - 1)];
        }
        array_push($password_array, $word);
        $x++;
    }

    # convert password array to password value
    foreach ($password_array as $value) {
        $password = $value . '-' . $password;
    }

    # remove trailing hyphen
    $password = substr($password, 0, -1);

 ?>
