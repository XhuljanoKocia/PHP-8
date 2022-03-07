<?php
    echo 'Some text' . '<br>';

    //Print returns 1 and can be used in expressions while echo can't
    print 'Some text' . '<br>';

    $x = 1;
    $y = &$x;
    $x = 3;
    //Y value will be 1, if we want it to be the same when the X changes we need to put &$x when assigning the value to Y
    echo $y;

    $firstname = 'Xhuljano';
    //With single quotes it will print hello $firstname, if we use double quotes it will print Hello Xhuljano
    echo "Hello $firstname";
?>
