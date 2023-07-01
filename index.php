<?php
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>PHP Badwords</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>FORM</h1>
                    <form class="mt-5" action="hide_word.php" method="POST">
                        <h3>Inserisci parola da censurare:</h3>
                        <input type="text" name="to_hide">
                        <h3>Inserisci testo:</h3>
                        <textarea rows="4" cols="30" name="text" placeholder="scrivi qui..."></textarea>
                        <input type="submit" value="Invia">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>