<? 
    require_once('data/questions.php');
?>

<html>
    <head>
        <title>Sua Série</title>
        <!--LINKS-->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <form id="testForm" action="result.php" method="post">
            <? foreach($questions as $questionKey => $question) {
                echo '<div class="questionTab">
                <div class="progressBar">
                    <div class="progress progress'.$questionKey.'"></div>
                </div>
                    <h2 class="title">'.$question.'</h2>
                    <div class="answersContainer">';
                        shuffle($answers[$questionKey]);
                        foreach($answers[$questionKey] as $answer) {
                            echo '<label class="answer">
                                <input type="radio" value="'.$answer[0].'" name="'.$questionKey.'" />
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