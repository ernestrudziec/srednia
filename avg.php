<?php
function srednia()
{
    $liczby = func_get_args();
    return array_sum($liczby)/func_num_args();
}

echo srednia(1, 2, 5, 3, 4, 2, 2, 1, 3);
?>
<?php
$oceny = array(6,3,3,4,5);
$wagi = array(5,6,3,5,1);
$sumaWazona = 0;
foreach( $oceny as $klucz => $ocena ){
  $sumaWazona +=  $ocena * $wagi[$klucz];
  $sumaWag += $wagi[$klucz];
}
 
$wynik = $sumaWazona / $sumaWag;
?>