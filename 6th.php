<?php

$num = array(1,2,3,4,5,6,9);

// Element to search for
$searchElement = 10;

// Flag to indicate if the element is found
$found = false;

// Loop through the array to search for the element
foreach ($num as $number) {
    if ($number == $searchElement) {
        $found = true;
        break; // Exit the loop once the element is found
    }
}

// Check if the element is found and display the result
if ($found) {
    echo "Element $searchElement is found in the array.";
} else {
    echo "Element $searchElement is not found in the array.";
}
?>
