<? 
    require_once('data/questions.php');
?>

<html>
    <head>
        <title>Qual série você seria?</title>
        <!--METAS-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="serie, geek, web, teste, quiz">
        <meta name="language" content="PT-BR">
        <meta name="author" content="Luan Peil">
        <meta name="robots" ontent="noindex">
        <meta name="googlebot" content="noindex">
        <!--LINKS-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/questions.css">
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1 class="sitename">Qual série você seria?</h1>
        <form class="siteCard" id="testForm" action="result.php" method="post">
            <? foreach($questions as $questionKey => $question) {
                echo '<div class="questionTab">
                <div class="progressBar">
                    <div class="progress progress'.$questionKey.'"></div>
                </div>
                    <h2 class="questionTitle">'.$question.'</h2>
                    <div class="answersContainer">';
                        
                        foreach($answers[$questionKey] as $answer) {
                            echo '<label class="answer">
                                <input type="radio" value="'.$answer[0].'" name="'.$questionKey.'" />
                                <span class="checkmark"></span>
                                <span class="aswertText">'.$answer[1].'</span>
                            </label>';
                        }
                echo '</div>
                </div>';
            } ?>
            <div class="buttons">
                <button id="prevButton" type="button">Voltar</button>
                <button id="nextButton" type="button">Avançar</button>
            </div>
        </form>
    </body>
    <footer>
            <script src="js/changeQuestion.js"></script>
    </footer>
</html>