<?php
function srednia()
{
    $liczby = func_get_args();
    return array_sum($liczby)/func_num_args();
}

echo srednia(1, 2, 5, 3, 4, 2, 2, 1, 3);
?>