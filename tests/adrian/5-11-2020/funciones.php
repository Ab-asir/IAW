<?php
function openHtmlTag(){
	echo "<html>";
}
function closeHtmlTag(){
	echo "</html>";
}
function openTag($tag, $id, $class = ""){
	echo "<".$tag." class=".$class.">";
}
function closeTag($tag){
	echo "</".$tag.">";
}
function titulo(){
	echo "Este es el titulo";
}
function sayWhatever($whatever){
	echo "$whatever";
}
openHtmlTag();
opentag("title", "class=red");
titulo();
closetag("title");
opentag("h1", "class=red");
sayWhatever("Este es el titulo");
closetag("h1");
opentag("p", "class=red");
sayWhatever("Hola Este es el contenido");
closeTag("p");
closeHtmlTag();