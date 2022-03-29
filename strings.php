<?php
    /* STRINGS */

    $firstName = 'Xhuljano';
    $lastName = "{$firstName} Koçia";
    // The difference between single quotes and double quotes is that in double quotes we can use variables and in single quotes we can't

    echo $firstName . '<br>';
    echo $lastName . '<br>';

    $x = 1;
    $y = 2;

    // Heredoc
    $text = <<<TEXT
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo nl2br($text);

    // Nowdoc
    $text = <<<'TEXT'
    Line 1 $x
    Line 2 $y
    Line 3
    TEXT;

    echo '<br>';
    echo nl2br($text); // Both variable here will be printest as $x and $y not their value
?>