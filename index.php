<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html>

    <head>
        <title>xkcd Style Password Generator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    </head>

    <h1 class="text-center">xkcd Style Password Generator</h1>

    <body>
        <div class="container text-center">
            <form action="index.php" role="form" class="block input">
                    <p>
                        <label for="number_of_words">Number of Words:</label>
                        <input type="text" class="form-inline" name="number_of_words" id="number_of_words" value=<?php get_number_of_words(); ?>>
                        <br>

                        <label for="add_symbol">Add Symbol:</label>
                        <input type="checkbox" class="form-inline" name="add_symbol" id="add_symbol" <?php get_add_symbol(); ?>>
                        <br>

                        <label for="add_number">Add Number:</label>
                        <input type="checkbox" class="form-inline" name="add_number" id="add_number" <?php get_add_number(); ?>>
                        <br>

                        <label for="uppercase">All Uppercase:</label>
                        <input type="radio" name="case" id="uppercase" value="upper" <?php get_uppercase(); ?>>
                        <br>

                        <label for="lowercase">All Lowercase:</label>
                        <input type="radio" name="case" id="lowercase" value="lower" <?php get_lowercase(); ?>>
                        <br>
                    </p>

                    <input type="submit" class="btn btn-primary btn-lg" value="Get a Password!">
                    <br>
            </form>

            <p>
                <div class="block password">
                    <strong><?php echo $password ?></strong>
                </div>
                <br>
            </p>
            <p>
                <div class="block error">
                    <strong><?php echo $error ?></strong>
                </div>
            </p>
        </div>
    </body>

</html>
