<?php
 function openHtmlTag() {
     echo "<html>";
 }
 function closeHtmlmTag() {
     echo "</html>";
 }
 function opentag($tag, $id, $class = "") {
     echo "<".$tag." id= ".$id." class=".$class.">"

 }
 function closetag($tag) {
     echo "</".tag.">";
 }
 function sayWhatever($whatever) {
     echo "$whatever";
 }
 openHtmltag();
 opentag("title");
 sayWhatever("Este es el titulo");
 closetag("title");
 opentag("h1", "class=red");
 sayWhatever("Este es el titulo")
 closetag(h1);
 opentag("p", "class=red");
 sayWhatever("Hola este es el contenido");
 closetag(p);
 closeHtmlmTag();