<? require_once("includes/header.php");

$sum = [0, 0, 0, 0, 0];

for($i = 0; $i < count($_POST); $i++) {
    $sum[$_POST[$i]]++;
}

$mostSelected = array_keys($sum, max($sum));

if(count($mostSelected) > 1) {
    if(in_array($_POST[4], $mostSelected)) {
        $mostSelected = $_POST[4];
    } else {
        $mostSelected = $_POST[3];
    }
} else {
    $mostSelected = $mostSelected[0];
}

echo '<div class="siteCard">
    <h1 class="resultTitle">'.$result[$mostSelected]["title"].'</h1>
    <img class="resultImage" src="'.$result[$mostSelected]["image"].'" />
    <p class="resultDescription">'.$result[$mostSelected]["text"].'</p>
</div>';

require_once("includes/header.php");
