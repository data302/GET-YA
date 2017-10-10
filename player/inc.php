<?php

function getya($msg){
$msg = trim($msg);
$msg = htmlspecialchars($msg);
$msg = mysql_escape_string($msg);
return $msg;
}
?>