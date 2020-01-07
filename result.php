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
    <div class="resultButtons">
        <a href="index.php"><button class="backHome">Refazer o Teste</button></a>
        <div class="shareButtons">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://peil.dev/serieQuiz/?winner='.$mostSelected.'">
                <button class="share facebook">Compartilhar</button>
            </a>
            <a target="_blank" href="https://twitter.com/intent/tweet?text=https://peil.dev/serieQuiz/?winner='.$mostSelected.'">
                <button class="share twitter">Twittar</button>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?&text=https%3A%2F%2Fpeil.dev%2FserieQuiz%2F%3Fwinner%3D'.$mostSelected.'">
                <button class="share whatsapp">Whatsapp</button>
            </a>
        </div>  
    </div>      
</div>';

require_once("includes/header.php");
