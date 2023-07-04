<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <?php
        // switch (value) {
        //     case test_value1: 
        //         statement
        //     case test_value2:
        //         statement
        //     default:
        //         statement
        // }
    ?><br />

    <?php
        define('TEST_VAL', '10');

        switch (TEST_VAL) {
            case is_numeric(TEST_VAL) && is_int(TEST_VAL):
                echo "TEST_VAL is numeric and an Integer";
                break;
            case is_numeric(TEST_VAL) && is_float(TEST_VAL):
                echo 'TEST_VAL is numeric and a Float';
                break;
            default:
                echo 'TEST_VAL is not numeric';
        }
    ?><br />

    <?php
        $year = 2013;
        switch (($year - 4) % 12) {
            case  0: 
                $zodiac = 'Rat';     
                break;
            case  1: 
                $zodiac = 'Ox';       
                break;
            case  2: 
                $zodiac = 'Tiger';   
                break;
            case  3: 
                $zodiac = 'Rabbit';   
                break;
            case  4: 
                $zodiac = 'Dragon';   
                break;
            case  5: 
                $zodiac = 'Snake';   
                break;
            case  6: 
                $zodiac = 'Horse';   
                break;
            case  7: 
                $zodiac = 'Goat';     
                break;
            case  8: 
                $zodiac = 'Monkey';  
                break;
            case  9: 
                $zodiac = 'Rooster'; 
                break;
            case 10: 
                $zodiac = 'Dog';     
                break;
            case 11: 
                $zodiac = 'Pig';     
                break;
        }
        echo "{$year} is the year of the {$zodiac}.<br />";
    ?><br />
</body>
</html>