<?php
function task1($array, $parameter)
{
    if ($parameter) {
        return implode(' ', $array);
    } else {
        foreach ($array as $value) {
            echo "<p>$value</p>";
        }
    }
}