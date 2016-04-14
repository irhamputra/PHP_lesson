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
    <?php foreach(array_reverse($arrHomework) as $date => $task) : ?>
        <date><?= $date ?></date>
        <p><strong><?= $task['desc']; ?></strong></p>
        <div><em><?= $task['additional_infos']; ?></em></div>
        <hr>
    <?php endforeach; ?>
</div>