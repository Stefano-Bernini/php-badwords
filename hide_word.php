<?php

    $to_hide = $_POST['to_hide'];
    $text = $_POST['text'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-5">La parola da censurare e': <?php echo $to_hide; ?></h1>
                <h1>ed e' lungo <?php strlen($to_hide) ?> caratteri!</h1>
                <h1 class="mt-5">Questo e' il testo censurato di lunghezza <?php echo strlen($text) ?>:</h1>
                <h1><?php echo $text; ?></h1>
            </div>
        </div>
    </div>
</body>
</html>