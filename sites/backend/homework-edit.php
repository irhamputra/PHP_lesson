<?php if(isset($_SESSION['credentials']['status']) && $_SESSION['credentials']['username'] == "admin") :?>
<div class="row">
    <form action="" method="post">
        <div class="row">
            <div class="input-field col s12">
                <textarea name="homeworks[description]" class="materialize-textarea" id="homework_desc"><?= (!empty($homeworks_edit)) ? $homeworks_edit[0]['homework_description'] : "" ?></textarea>
                <label for="homework_desc">Hausaufgabe</label>
            </div>
            <div class="input-field col s12">
                <input type="submit" name="<?= (!empty($homeworks_edit)) ? "homeworks[update]" : "homeworks[submit]"?>" value="Save" class="btn">
                <input type="hidden" name="homeworks[id]" value="<?= (!empty($homeworks_edit)) ? $homeworks_edit[0]['homework_id'] : "" ?>">
            </div>
        </div>
    </form>
</div>

<?php if(!empty($homeworks) && isset($homeworks)): ?>

    <ul class="collection with-header">
    <?php foreach($homeworks as $row => $homework): ?>
        <li class="collection-header"><?= date("d.m.Y", strtotime($homework['homework_date'])) ?></li>
        <li class="collection-item">
            <p><?= $homework['homework_description'] ?></p>
            <a href="?backend&p=homework-edit&action=delete&delete=<?= $homework['homework_id'] ?>">Delete</a>
            <a href="?backend&p=homework-edit&action=edit&edit=<?= $homework['homework_id'] ?>">Edit</a>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php else: ?>
<h2>Keine Rechte</h2>
<?php endif; ?>