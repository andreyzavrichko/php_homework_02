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

function task5()
{
    echo $string = 'Карл у Клары украл Корралы';
    echo '<br>';
    echo str_replace('К', '', $string);
    echo '<br>';
    echo $string2 = 'Две бутылки лимонада';
    echo '<br>';
    echo str_replace('Две', 'Три', $string2);
    echo '<br>';
    echo $string3 = 'Сорок два солдата';
    echo '<br>';
    echo str_replace('два', 'четыре', $string3);
    echo '<br>';
    echo $string4 = 'Удалить';
    echo '<br>';
    echo str_replace('У', '', $string4);
    echo '<br>';
}