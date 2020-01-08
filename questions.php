<?php 
require_once("includes/header.php"); 
?>

<form class="siteCard" id="testForm" action="result.php" method="post">
    <? foreach($questions as $questionKey => $question) {
        shuffle($answers[$questionKey]);
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
<script src="js/changeQuestion.js"></script>

<? require_once("includes/footer.php"); ?>
