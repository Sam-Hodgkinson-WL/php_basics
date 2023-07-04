<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integers</title>
</head>
<body>
    <?php
    $var1 = 3;
    $var2 = 4;

    ?>

    Basic Math : <?php
    echo ((1+2+$var1) * $var2) / 2 - 5 . '<br />';
    echo $var2 += 1; // This does actually edit the variable and save the new value!!
    echo $var2;
    $var2++;
    echo $var2;
    $var2--;
    echo $var2;
    echo $var2;
    echo '<br />';

    $string = 'This is a string';
    $integer = 1;
    $float = 1.2;
    $boolean = true;

    echo gettype("the type of string is: " . $string . '<br />');
    echo gettype("the type of integer is: " . $integer . '<br />');
    echo gettype("the type of float is: " . $float . '<br />');
    echo gettype("the type of boolean is: " . $boolean . '<br />');
    ?>
</body>
</html>