<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        echo "<h1>Functions in PHP</h1>";
        echo "Seems to be exactly the same as JS <br />";

        function some_func($name, $age) {
            $result =  "{$name} is {$age} years old!";
            // echo $result;
            return $result;
        };

        echo some_func('Sam', 30);
    ?><br />

    <?php
        echo "<h1>Default values in functions</h1>";
        function default_values($val1 = 'Enter a greeting, ', $val2 = 'Enter name') {
            $result = "{$val1} {$val2}";
            return $result;
        }

        echo default_values('Hi', 'Sam');
        echo '<br />';
        echo default_values();
        echo '<br />';
        echo default_values('Hello', null);
        echo '<br />';
        echo default_values('Greetings');
        // echo default_values(, 'Paulie'); // This does not work, is there a way to send nothing into a function??
        // echo default_values($, 'Paulie'); // Still doesn't work
    ?><br />
</body>
</html>