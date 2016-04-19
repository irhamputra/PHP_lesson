
<form action="" method="post">
    <div>
        <input type="text" name="guestbook[username]" />
    </div>
    <div>
        <textarea name="guestbook[message]" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit" name="guestbook[submit]" value="Hochladen">
    </div>
</form>

<h5>Alle Einträge</h5>
<?php foreach($entries as $key_row => $gb_entry) : ?>
<div class="row">
    <h6><?= $gb_entry['guestbook_username'] ?> schrieb, am: <?= $gb_entry['guestbook_created'] ?></h6>
    <p><?= $gb_entry['guestbook_message'] ?></p>
    <a href="<?= _BASE_ ?>?p=guestbook&action=edit&edit=<?= $gb_entry['guestbook_id'] ?>">edit</a>
    <a href="<?= _BASE_ ?>?p=guestbook&action=delete&delete=<?= $gb_entry['guestbook_id'] ?>">delete</a>
</div>
<?php endforeach; ?>
