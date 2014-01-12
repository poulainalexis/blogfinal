<?php

require("libs/smarty.class.php"); // uclure la class smarty

$smarty = new Smarty();

$monTexte = "<p> comment dire que c'est la premier fois que j utilise les template </p>";
$smarty->assign("test",$monTexte);
$smarty->display("smarty.tpl");

?>