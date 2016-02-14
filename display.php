<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html>

    <head>
        <title>xkcd Style Password Generator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>

    <h1><strong>xkcd Style Password Generator</strong></h1>

    <body>
        <div class="container">
            <form>
                <label for="number_of_words">Number of Words:</label>
                <input type="text" name="number_of_words" id="number_of_words" value="3"><br>

                <label for="add_symbol">Add Symbol:</label>
                <input type="checkbox" name="add_symbol" id="add_symbol" value="symbol"><br>

                <label for="add_number">Add Number:</label>
                <input type="checkbox" name="add_number" id="add_number" value="number"><br>

                <input type="submit" class="btn" name="submit_button" value="Get a Password!"><br>
            </form>
        </div>
    </body>

</html>
