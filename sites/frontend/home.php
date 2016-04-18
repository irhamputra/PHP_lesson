
<ul class="collection with-header">
    <li class="collection-header"><h5>Heutige Themen</h5></li>
    <li class="collection-item">Kontaktformular Auswertung</li>
    <li class="collection-item">Datei-Upload</li>
    <li class="collection-item">Cookies setzen</li>
</ul>
<hr>

<ul class="collection with-header">
    <li class="collection-header"><h5>Änderungen seit dem letzen Unterricht(Session 2 vom 12.04.)</h5></li>
    <li class="collection-item">Ordnerstruktur für Studentenincludes</li>
    <li class="collection-item">Umbau der Hausaufgabenverwaltung: Von HTML zu PHP (config.php und hausaufgaben.php)</li>
    <li class="collection-item">Kommentierung der einzelnen Unterrichtseinheiten im Quellcode (z.B: note Session 1 steht für erste Unterrichtseinheit)</li>
</ul>
<hr>
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
        <td>Cookie setzen, Kontaktformular implementieren und Mail-Verschicken, Dateiupload</td>
    </tr>
</table>

<ul class="collection with-header">
    <li class="collection-header"><h5>Todo</h5></li>
    <li class="collection-item">fread beispiel</li>
    </ul>
<h5></h5>

<?= nl2br(file_get_contents("Fragen.txt")); ?>
