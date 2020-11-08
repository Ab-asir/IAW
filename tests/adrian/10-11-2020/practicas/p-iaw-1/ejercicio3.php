<?php
//funcciones
function openHtmlTag(){
	echo "<html>";
}
function closeHtmlTag(){
	echo "</html>";
}
function openTag($tag){
	echo "<".$tag.">";
}
function closeTag($tag){
	echo "</".$tag.">";
}
function titulo(){
	echo "Fecha actual";
}
function texto($texto){
	echo "$texto";
}

//variables

$dia_semana = date("l");
$dia = date("d");
$mes = date("m");
$año = date("Y");

openHtmlTag(); //<html>
openTag("head"); //<head>
openTag("title"); //<title>
titulo(); 
closetag("title"); //</title>
closetag("head"); //</head>
opentag("body"); //<body>
openTag("table border=1"); //<table>
openTag("tr"); //<tr>
openTag("td"); //<td>
texto("Hoy es <b>$dia_semana</b>"); //contenido dentro del td
closeTag("td"); //</td>
openTag("td"); //<td>
texto("a <b>$dia</b>"); //contenido dentro del td
closeTag("td"); //</td>
openTag("td"); //<td>
texto("del <b>$mes</b>"); //contenido dentro del td
closeTag("td"); //</td>
openTag("td"); //<td>
texto("del <b>$año</b>"); //contenido dentro del td
closeTag("td"); //</td>
closeTag("tr"); //</tr>
closeTag("table"); //</table>
closetag("body"); //</body>
closeHtmlTag(); //</html>