<?php

require "src/function.php";
echo task1(array('Петров','Иван', 'Семенович'), true);
echo '<br>';
echo task1(array('Петров','Иван', 'Семенович'), false);
echo '<br>';

task2('+', 1, 2, 3, 5.2);
task2('-', 146, 58, 11, 6.3);
task2('*', 2, 2, 3, 6);
task2('/', 1024, 2, 3, 2);
?>

<html>
    <body>
        <table>
            <?php task3(8,8);?>
        </table>
    </body>
</html>

<?php

task4();

task5();

file_put_contents('text.txt', 'Hello again!');
task6('text.txt');