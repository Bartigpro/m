
<?php
// pole koła, zaokrąglenie
$napis = $_GET ['napis'];
$pi = pi();
$n = $pi * ($napis*$napis );
echo round($n, 2)


?>
    