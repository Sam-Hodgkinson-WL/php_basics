<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type casting and Constant variables</title>
</head>
<body>
    <?php
        $intro = 'Hey there';
        $a_num_in_string = '2';
        $to_int = (integer) $a_num_in_string;
        echo $to_int;
    ?><br />
    <?php
        $forty_two = 42;
        $to_int = (int) $forty_two;
        $to_float = (float) $forty_two;
        $to_bool = (bool) $forty_two;
        ?><br />
        <?php
        echo 'Int = ' . $to_int;
        ?><br />
        <?php
        echo 'Float = ' . $to_float;
        ?><br />
        <?php
        echo 'Boolean = ' . $to_bool;
        ?><br />
    <h1>Constants</h1>
    <?php
        define('MAX_WIDTH', 120);
        echo MAX_WIDTH;
    ?><br />
</body>
</html>