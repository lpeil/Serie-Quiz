<? require_once("includes/header.php");

$votes = array_count_values($_POST);
$mostVoted = array_keys($votes, max($votes));

if(count($mostVoted) > 1) {
    for($i = count($_POST); $i > 0; $i--) {
        if(in_array($_POST[$i], $mostVoted)) {
            $mostVoted = $_POST[$i];
            break;
        }
    }
} else {
    $mostVoted = $mostVoted[0];
}

$sql = "SELECT * FROM `series` WHERE id = :id";

$result = $pdo->prepare($sql);
$result->bindValue(':id', $mostVoted, PDO::PARAM_INT);
$result->execute();

$serie = $result->fetch(PDO::FETCH_ASSOC);

echo '<div class="siteCard">
    <h1 class="resultTitle">'.$serie["title"].'</h1>
    <img class="resultImage" src="'.$serie["image"].'" />
    <p class="resultDescription">'.$serie["description"].'</p>
    <div class="resultButtons">
        <a href="questions.php"><button class="backHome">Refazer o Teste</button></a>
        <div class="shareButtons">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://peil.dev/serieQuiz/?winner='.$serie["id"].'">
                <button class="share facebook">Compartilhar</button>
            </a>
            <a target="_blank" href="https://twitter.com/intent/tweet?text=https://peil.dev/serieQuiz/?winner='.$serie["id"].'">
                <button class="share twitter">Twittar</button>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?&text=https%3A%2F%2Fpeil.dev%2FserieQuiz%2F%3Fwinner%3D'.$serie["id"].'">
                <button class="share whatsapp">Whatsapp</button>
            </a>
        </div>  
    </div>      
</div>';

require_once("includes/header.php");
