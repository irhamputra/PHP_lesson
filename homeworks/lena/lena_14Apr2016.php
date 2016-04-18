<?php

/**
 * Definition eines Arrays mit Fragen zum Skript.
 * Der erste Eintrag enthält die Überschrift, alle weiteren sind die Fragen.
 */
 
$fragen = array (
  0 => "Fragen zum Skript:",
  1 => "Warum wurden generate_pagefile und die Validierung überhaupt in Funktionen gepackt? Mit foreach müsste es doch auch so funktionieren?",
  2 => "Bitte noch einmal Unterschiede und Anwendungsbeispiele für fread, readfile und file/file_get_contents erklären!",
  3 => "Wie kann ich den Inhalt dieser Textdatei über das php-Skript im Browserfenster wiedergeben?"
);

/**
 * Öffnen / Erstellen einer Textdatei, in der die Fragen aus dem Array ausgelesen werden.
 * Übertragen der Überschrift und der Fragen mit fwrite in die Textdatei.
 */
 
$handle = fopen ("Fragen.txt", "w+");


foreach ($fragen as $no => $question){
  if ($no == 0){
    fwrite ($handle, $question . "\r\n");
  } else {
    fwrite ($handle, ($no . ". " . $question . "\r\n"));
  }
}

/**
 * zum Schluss wird die Textdatei geschlossen.
 */
 
fclose ($handle);

echo "Ich lasse hier im Hintergrund des Skriptes eine Textdatei erstellen, in der ich meine Fragen sammle. <br />";

/**
 * Auslesen des Inhalts mit file()
 * Auslesen des Inhalts mit file_get_contents()
 */

$file = file ("Fragen.txt");
foreach ($file as $key => $value){
  print_r ("file(): " . $value . "<br />" . "<br />");
}

$file_get_contents = file_get_contents("Fragen.txt");
print "file_get_contents(): " . $file_get_contents . "<br />" . "<br />";


?>