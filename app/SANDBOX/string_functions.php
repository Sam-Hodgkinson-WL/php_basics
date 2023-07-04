<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varriables</title>
</head>
<body>
    <?php

        $first_string = 'The quick brown fox';
        $second_string = ' jumped over the moon' ;

        $third_string = $first_string;
        $third_string .= $second_string . '<br />';

        echo $third_string;
        echo $first_string . $second_string;
        echo '<br />';

        echo strtolower($first_string);
        echo strtoupper($first_string);
    ?>
</body>
</html>