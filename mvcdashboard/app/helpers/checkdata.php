<?php
function is_value($array)
{
    foreach ($array as $value) {
        if (!empty ($value)) {
            return true; // If any value is not empty, return true
        }
    }
    return false; // If no non-empty values are found, return false
}

?>