<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

</body>
    <?php
        // while (expression) {
        //     echo 'Something here'
        // }
    ?><br />

    <?php
        define('WHILE_CONSTANT', 10);
        
        echo '<h1>While loop</h1>';
        $count = 1;
        while ($count <= WHILE_CONSTANT) {
            echo "The count is currently {$count} <br />";
            $count++;
        };
        echo "The count after the while loop is {$count}"
    ?><br /><br />

    <?php
        define('FOR_CONSTANT', 10);

        echo '<h1>For loop</h1>';
        for ($i = FOR_CONSTANT; $i >= 0; $i--) {
            echo "The current count is {$i} <br />";
        };
    ?><br /><br />

    <?php
        define('FOREACH_CONSTANT', [1,2,3,4,5,6,7,8,9,10]);

        echo '<h1>Foreach loop</h1>';
        foreach (FOREACH_CONSTANT as $number) {
            echo "The current number is {$number} <br />";
        };
    ?><br />

    <?php
        echo '<h1>Foreach loop with an associative array or object</h1>';

        define('FOR_EACH_ASSICIATIVE_ARRAY', array(
            'first_name' => 'Sam',
            'last_name' => 'Hodgkinson',
            'age' => 30,
            'gender' => 'Male',
            'Country' => 'Scotland'
        ));

        define('TRYING_SHORTHAND_OBJECT_CREATION', [
            'first_name' => 'Sam',
            "last_name" => 'Hodgkinson',
            "age" => 30,
            'gender' => 'Male',
            'Country' => 'Scotland'
        ]);

        foreach (FOR_EACH_ASSICIATIVE_ARRAY as $attribute => $data) {
            $readable_attribute = ucwords(str_replace('_', ' ', $attribute));
            echo "{$readable_attribute}: {$data}<br />";
        }

        echo '<h1>Shorthand for creating an object in php</h1>';

        foreach (TRYING_SHORTHAND_OBJECT_CREATION as $attribute => $data) {
            $readable_attribute = ucwords(str_replace('_', ' ', $attribute));
            echo "{$readable_attribute}: {$data}<br />";
        }
    ?><br />

    <?php
    echo '<h1>PHP Pointers</h1>';

    $pointers_array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    
    $pointers_1 = current($pointers_array);
    echo "echo current(pointers_array) = {$pointers_1} <br />";
    $next_pointers = next($pointers_array);
    echo "echo next(pointers_array) = {$next_pointers} <br />";
    $prev_pointers = prev($pointers_array);
    echo "echo prev(pointers_array) = {$prev_pointers} <br />";
    next($pointers_array);
    echo "moving the pointer along two places to properly show what reset does <br />";
    next($pointers_array);
    $reset_pointers = reset($pointers_array);
    echo "reset(pointers_array) = {$reset_pointers}<br />";
    $end_pointers = end($pointers_array);
    echo "end(pointers_array) = {$end_pointers}";
    ?><br />
</html>