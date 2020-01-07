<?php
require_once("data/questions.php"); 

$winner = $_GET["winner"];
?>

<title>Qual série você seria? Eu tirei <?=$result[$winner]["title"]?></title>

<meta property="og:title" content="Qual série você seria? Eu tirei <?=$result[$winner]["title"]?>">
<meta property="og:description" content="<?=$result[$winner]["description"]?>">
<meta property="og:image" content="https://peil.dev/serieQuiz/images/shareImage.png">
<meta property="og:url" content="https://peil.dev/serieQuiz">
<meta name="twitter:card" content="summary_large_image">

<meta property="og:site_name" content="Peil Dev - Serie Quiz">
<meta name="twitter:image:alt" content="<?=$result[$winner]["title"]?>">

<meta property="fb:app_id" content="582330408999460" />
<meta name="twitter:site" content="@srpeil">
<meta name="twitter:creator" content="@srpeil">