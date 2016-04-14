<div class="row">
    <h5>FTP Zugang</h5>
    <table class="bordered">
        <tr>
            <td>Server:</td>
            <td>ftp.mycoding.rocks</td>
        </tr>
        <tr>
            <td>Benutzername:</td>
            <td>450699-student</td>
        </tr>
        <tr>
            <td>Passwort:</td>
            <td>student@sae</td>
        </tr>
    </table>
</div>
<div class="row">

    <h5>Hausaufgabe:</h5>
    <p><strong class="chip">Hinweis:</strong><br/>
        Jeder hat jetzt auf dem Server in dem Homeworks ordner einen eigenen Unterordner. Wenn ihre eure Hausaufgabe
        macht, erstellt bitte eine Datei
        mit dem aktuellen Datum als Namen z.B. 12-04-16.php (Bei Thomas im Ordner existiert diese Datei schon) und
        included die in eure Arbeitsdatei. Damit stellen wir sicher dass eure Datei
        immer Aufgeräumt bleibt und die Hausaufgaben nachvollziehbar sortiert sind.
        <br/><br/>
        lg
        Marten</p>
    <?php foreach (array_reverse($arrHomework) as $date => $task) : ?>
        <strong class="chip blue darken-4 white-text"><?= $date ?></strong>
        <p><strong><?= $task['desc']; ?></strong></p>
        <div><em><?= $task['additional_infos']; ?></em></div>
        <hr>
    <?php endforeach; ?>
</div>