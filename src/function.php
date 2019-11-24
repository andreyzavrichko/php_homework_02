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

function task2(...$args) {
    if(!isset($args)){
        echo 'Отсутствуют аргументы!';
        return;
    }
    $operator = array_shift($args);

    $str = implode($operator, $args);
    eval('$result = '. $str . ';');
    echo $str . '=' . $result;
    echo '<br>';
}