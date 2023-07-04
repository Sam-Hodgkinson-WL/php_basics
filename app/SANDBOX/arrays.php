<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $numbers = array(1,2,3,4,5,6,7,8,9,0);
        echo($numbers[count($numbers) - 2]);
        $multi_type_array = [1, 'one', true, array(1, 2, 3)];
        $trying_something = [1, 2, 3, [1, 2, 3]];
        $new_array = array(1, 2, 3, 4)
    ?><br />
    <?php
    echo(gettype(($multi_type_array[0])));
    ?><br />
    <?php
    echo(gettype(($multi_type_array[1])));
    ?><br />
    <?php
    echo(gettype(($multi_type_array[2])));
    ?><br />
    <?php
    echo $multi_type_array[3][2];
    ?><br />
    <pre>
    <?php
        $multi_type_array[4] = 'dog';
        $multi_type_array[6] = 'cow';
        print_r($multi_type_array);
        echo $multi_type_array[5];
    ?>
    </pre><br/>
    <pre>
        <?php
        print_r($trying_something)
        ?>
    </pre>
</body>
</html>