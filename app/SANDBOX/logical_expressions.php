<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Expressions</title>
</head>
<body>
    <?php
        define('SOME_CONST', 101);
        define('SOME_BOOL', false);
        echo 'Variable = ' . SOME_CONST;
    ?><br />

    <?php
        if(SOME_CONST > 100) {
            echo 'More than or equal to 100';
        }elseif(SOME_CONST < 100) {
            echo 'Less than 100';
        }else {
            echo 'Equal to 100';
        }
    ?><br />

    <?php
        if(SOME_CONST < 100 || SOME_CONST > 100) {
            echo 'Not equal to 100';
        }else {
            echo 'Equal to 100';
        }
    ?><br />

    <?php
        if(SOME_CONST !== 100) {
            echo 'Not equal to 100';
        }else {
            echo 'Equal to 100';
        }
    ?><br />

    <?php
        if(!SOME_BOOL) {
            echo 'False';
        }else {
            echo 'True';
        }
    ?><br />

    <?php
        echo SOME_BOOL ? 'True' : 'False';
    ?><br />
</body>
</html>