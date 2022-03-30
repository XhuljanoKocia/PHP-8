<?php
    /* ARRAYS */
    $programmingLanguages = ['PHP', 'Java', 'Python'];

    echo $programmingLanguages[1]; //If we try number 3 or a negative number it will result in an error

    var_dump(isset($programmingLanguages[3])); //We check if a value exists in that specific key

    echo '<pre>';
    print_r($programmingLanguages);
    echo '</pre>';

    echo count($programmingLanguages); //Counts how many elements are in an array

    $programmingLanguages[] = 'C++'; //Adds a new element to the end of the array

    array_push($programmingLanguages, 'C', 'GO', 'Javascript'); //This is another way to add new element to an array

    echo array_pop($programmingLanguages); //It will remove the last element from the array and return that element

    echo array_shift($programmingLanguages); //It will remove the first element from the array and return that element, it will reindex the array

    var_dump(array_key_exists('a', $programmingLanguages)); //It checks if a key 'a' exists or not into an array
?>