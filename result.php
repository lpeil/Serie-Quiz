<? require_once('data/questions.php');

$sum = [
    0 => 0,
    1 => 0,
    2 => 0,
    3 => 0,
    4 => 0
];

for($i = 0; $i < count($_POST); $i++) {
    $sum[$_POST[$i]]++;
}

$mostSelected = array_keys($sum, max($sum));
$qtyMostSelected = count($mostSelected);

if($qtyMostSelected > 1) {
    if(in_array($_POST[4], $mostSelected)) {
        $mostSelected = $_POST[4];
    } else {
        $mostSelected = $_POST[3];
    }
} else {
    $mostSelected = $mostSelected[0];
}

echo '<div>
    <h1>'.$result[$mostSelected]["title"].'</h1>
    <h3>'.$result[$mostSelected]["text"].'</h3>
</div>';