<?php

session_start(); 
echo "<html>";

$sid = session_id();

echo "Session ID returned by session_id(): ".$sid. "\n";

Ssid= SID;

echo "Session ID returned by SID: ".$sid."\n";

SmyLogin = $_SESSION["myLogin"];

echo "Value of myLogin has been retrieved: ".$myLogin. "\n";

$myColor = $_SESSION["myColor"];

echo "Value of MyColor has been retrieved: ". SmyColor."\n";

echo "</html>\n";

?>
