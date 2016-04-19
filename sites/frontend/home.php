<br/><br/>
<?php
// Note: Logout buggy, check it!
    if(isset($_SESSION['credentials']['status'])){
        echo "<a href='index.php?action=logout'>LOGOUT</a>";
    }
?>
<h5>Überblick Sessions</h5>
<table class="bordered">
    <tr>
        <td>Session 1</td>
        <td>Navigationsarray und generierung der Frontendnavigation</td>
    </tr>
    <tr>
        <td>Session 2</td>
        <td>Validierung der GET-Parameter und dynamische Erstellung der Unterseiten auf basis das $arrNav arrays</td>
    </tr>
    <tr>
        <td>Session 3</td>
        <td>Statusbehandlung, $_SESSION array, Produkte einem Warenkorb hinzufügen</td>
    </tr>
    <tr>
        <td>Session 4</td>
        <td>Cookie setzen, Kontaktformular implementieren und Mail-Verschicken, Dateiupload, (Datenbanken)</td>
    </tr>
    <tr>
        <td>Session 5</td>
        <td>Login & Logout, Gästebuch CRUD</td>
    </tr>
</table>
<br/><br/>
<ul class="collection with-header">
    <li class="collection-header"><h5>Heutige Themen</h5></li>
    <li class="collection-item">Login & Logout</li>
    <li class="collection-item">Gästebuch CRUD</li>
</ul>
<br/><br/>
<ul class="collection with-header">
    <li class="collection-header"><h5>Änderungen seit dem letzen Unterricht(Session 4 vom 18.04.)</h5></li>
    <li class="collection-item">Environment Switch eingebaut (Local, Live)</li>
    <li class="collection-item">Login-Routine angefangen</li>
    <li class="collection-item">Datebase.php erstellt für künftige Datenbank interaktion</li>

    <li class="collection-header"><h5>Änderungen seit dem letzen Unterricht(Session 3 vom 14.04.)</h5></li>
    <li class="collection-item">Dateiupload hinzugefügt</li>
    <li class="collection-item">Cookie gesetzt</li>
    <li class="collection-item">Registrierungsformular ausgewertet (Anfang)</li>

    <li class="collection-header"><h5>Änderungen seit dem letzen Unterricht(Session 2 vom 12.04.)</h5></li>
    <li class="collection-item">Ordnerstruktur für Studentenincludes</li>
    <li class="collection-item">Umbau der Hausaufgabenverwaltung: Von HTML zu PHP (config.php und hausaufgaben.php)</li>
    <li class="collection-item">Kommentierung der einzelnen Unterrichtseinheiten im Quellcode (z.B: note Session 1 steht für erste Unterrichtseinheit)</li>
</ul>
<br/><br/>
<ul class="collection with-header">
    <li class="collection-header"><h5>Merkblatt:</h5></li>
    <li class="collection-item">Datenbank Verbindung und Interaktion</li>
    <li class="collection-item">
        <pre><code>// Herstellen einer Verbindung
<span class="blue-text">$db</span> = new PDO("mysql:host="._DBHOST_.";dbname="._DBNAME_, _USER_, _PASSWORD_);
// Statement schreiben
<span class="blue-text">$sql</span> = "SELECT * FROM table";
// Statement vorbereiten
<span class="blue-text">$stmt</span> = <span class="blue-text">$db</span>-><span class="red-text">prepare</span>(<span class="blue-text">$sql</span>);
// Statement ausführen
<span class="blue-text">$stmt</span>-><span class="red-text">execute()</span>;
// wenn ergebnis vorhanden:
<span class="blue-text">$res</span> = <span class="blue-text">$stmt</span>-><span class="red-text">fetchAll</span>(PDO::FETCH_ASSOC);</code></pre>
    </li>
    <li class="collection-item">fread beispiel:</li>
    <li class="collection-item">
        Antwort: <br/>
        <code>
        <span class="blue-text">$file</span> = <span class="red-text">fopen</span>("Fragen.txt", "r");<br/>
         <span class="blue-text">$output</span> = <span class="red-text">fread</span>(<span class="blue-text">$file</span>, <span class="red-text">filesize</span>("Fragen.txt"));<br/>
         <span class="purple-text">echo</span> <span class="red-text">nl2br</span>(<span class="blue-text">$output</span>);<br/>
         <span class="red-text">fclose</span>(<span class="blue-text">$file</span>);<br />
        <br/>
        </code>
        Problem war die falsche Funktion für die Anzahl der Bytes. readfile() statt filesize()
    </li>
    </ul>
<h5></h5>

<?= nl2br(file_get_contents("Fragen.txt")); ?>
