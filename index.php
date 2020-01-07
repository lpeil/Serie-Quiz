<?php 
if(isset($_GET["winner"])) {
    require_once("share.php");
}

require_once("includes/header.php"); 
?>

<div class="siteCard indexCard">
    <div class="indexFooter">
        <span class="indexText">Qual série você seria?</span>
        <a href="questions.php">
            <button>Iniciar Quiz</button>
        </a>
    </div>
</div>

<? require_once("includes/footer.php"); ?>
