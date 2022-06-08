<?php

session_start(); echo "<html>";

SmyLogin = $_SESSION["myLogin"];

echo "Value of myLogin has been retrieved: ".$myLogin. "\n";

$myColor = $_SESSION["myColor"];

echo "Value of MyColor has been retrieved: ". SmyColor."\n";

echo "</html>\n";

?>