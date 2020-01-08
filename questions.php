<?php 
require_once("includes/header.php"); 
?>

<form class="siteCard" id="testForm" action="result.php" method="post">
    <? $sql = "SELECT * FROM `questions`";
    $questions = $pdo->prepare($sql);
    $questions->execute();

    while($question = $questions->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="questionTab">
        <div class="progressBar">
            <div class="progress progress'.$question["id"].'"></div>
        </div>
            <h2 class="questionTitle">'.$question["text"].'</h2>
            <div class="answersContainer">';
                $sql = "SELECT * FROM `answers` WHERE `question` = :question ORDER BY RAND()";
                $answers = $pdo->prepare($sql);
                $answers->bindValue(':question', $question["id"], PDO::PARAM_INT);
                $answers->execute();
                while($answer = $answers->fetch(PDO::FETCH_ASSOC)) {
                    echo '<label class="answer">
                        <input type="radio" value="'.$answer["serie"].'" name="'.$answer["question"].'" />
                        <span class="checkmark"></span>
                        <span class="aswertText">'.$answer["text"].'</span>
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
<script src="js/changeQuestion.js"></script>

<? require_once("includes/footer.php"); ?>
