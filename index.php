<?php

require "src/function.php";
echo task1(array('Петров','Иван', 'Семенович'), true);
echo '<br>';

task2('+', 1, 2, 3, 5.2);
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