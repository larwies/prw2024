
<?

$n = intval(fgets(STDIN));

$sc = 0;
$bc = 0;
$ac = 0;
$ssc = 0;
$sbc = 0;
$sac = 0;

for ($i = 0; $i < $n; $i++) {
    $str = fgets(STDIN);
    list($s, $b, $a, $s1, $b1, $a1) = array_map('intval', explode(' ', fgets(STDIN)));
    $sc += $s;
    $bc += $b;
    $ac += $a;
    $ssc += $s1;
    $sbc += $b1;
    $sac += $a1;
}

$p1 = ($ssc / $sc) * 100;
$p2 = ($sbc / $bc) * 100;
$p3 = ($sac / $ac) * 100;

printf("Pontos de Saque: %.2f %%.\n", $p1);
printf("Pontos de Bloqueio: %.2f %%.\n", $p2);
printf("Pontos de Ataque: %.2f %%.\n", $p3);


