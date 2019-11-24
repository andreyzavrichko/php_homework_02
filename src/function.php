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

function task2(...$args)
{
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

function task3($rows, $cols)
{
    for ($i = 1; $i <= $rows; $i++){
        echo '<tr>';
        for ($e = 1; $e <= $cols; $e++){
            echo '<td align="center">' . $i * $e . '</td>';
        }
        echo '</tr>';
    }
}

function task4()
{
    echo date('d.m.Y H:i');
    echo '<br>';
    echo mktime( 00, 00, 00, 2, 24, 2016);
    echo '<br>';
}