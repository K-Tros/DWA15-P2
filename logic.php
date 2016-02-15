<?php
# TODO change word array to scrape web page

    # validates number_of_words, throws exception if it is not valid
    function check_number_of_words($number, $word_list_length) {
        if ( !is_numeric($number) ) {
            throw new Exception('Number of Words must be numeric. Showing default length of 3.');
        }
        elseif ($number > $word_list_length) {
            throw new Exception('Number of Words must be less than ' . $word_list_length . '. Showing default length of 3.');
        }
    }

    # gets number_of_words for display
    function get_number_of_words() {
        if (isset($_GET["number_of_words"])) echo $_GET["number_of_words"];
    }

    # gets add_symbol for display
    function get_add_symbol() {
        if (isset($_GET['add_symbol'])) echo 'checked="checked"';
    }

    # gets add_number for display
    function get_add_number() {
        if (isset($_GET['add_number'])) echo 'checked="checked"';
    }

    # TODO change this to scrape web page from directions for word list
    $words = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten');
    $words_count = count($words);
    $symbols = array('~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '+', '=', '\\', '/', '<', '>', '?', '.', ',', ':', ';');
    $symbols_count = count($symbols);
    $password = '';
    $password_array = [];
    $error = '';

    # check if we should use the default number of words (3), generate error if invalid
    try {
        $number_of_words = isset($_GET["number_of_words"]) ? $_GET["number_of_words"] : 3;
        check_number_of_words($number_of_words, $words_count);
    } catch (Exception $e) {
        $number_of_words = 3;
        $error = $e->getMessage();
    }

    # build the password into an array, verifying uniqueness of each word
    $x = 0;
    while ($x < $number_of_words) {
        $word = $words[rand(0, $words_count - 1)];
        while (in_array($word, $password_array)) {
            $word = $words[rand(0, $words_count - 1)];
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

    # add a number if needed
    if (isset($_GET["add_number"])) {
        $password = $password . rand(0, 9);
    }

    # add a symbol if needed
    if (isset($_GET["add_symbol"])) {
        $password = $password . $symbols[rand(0, $symbols_count - 1)];
    }

 ?>
