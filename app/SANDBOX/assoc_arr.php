<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
    $assoc = ['first_name' => 'Sam', 'last_name' => 'Hodgkinson'];
        echo $assoc['first_name'] . ' ' . $assoc['last_name'];
        echo "{$assoc['first_name']} {$assoc['last_name']}"
    ?><br />
    <?php
        $an_array = [8, 23, 15, 42, 16, 4];
        echo count($an_array);
    ?><br />
    <?php
        echo max($an_array);
    ?><br />
    <?php
        echo min($an_array);
    ?><br />
    <pre>
    <?php
        sort($an_array);
        print_r($an_array); 
    ?><br />
    </pre>
    <pre>
    <?php
        rsort($an_array);
        print_r($an_array); 
        echo implode(' , ', $an_array);
    ?><br />
    </pre>
    <?php
        echo implode(' ', $an_array);
    ?><br />
    <?php
        $a_string = '1, 2, 3, 4, 5';
        $a_string_in_array = (explode(', ', $a_string));
        print_r(explode(', ', $a_string));
    ?><br />
    <?php
       echo in_array('7', $a_string_in_array);
    ?><br />
    <?php
       echo in_array(7, $a_string_in_array);
    ?><br />
    <?php
       echo in_array(2, $a_string_in_array);
    ?><br />
    <?php
       echo in_array('2', $a_string_in_array);
    ?><br />
</body>
</html>