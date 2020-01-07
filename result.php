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
    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fpeil.dev%2FserieQuiz%2Fshare.php%3Fwinner%3D'.$mostSelected.'&layout=button&size=large&appId=643178365871408&width=115&height=28" width="115" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>';

require_once("includes/header.php");
