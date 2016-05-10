<form action="" method="post">

    <div class="row">

        <div class="input-field col s12">

            <input placeholder="Name" type="text" value="<?= (!empty($edit_entrie)) ? $edit_entrie[0]['guestbook_username'] : "" ?>" name="guestbook[username]" />

        </div>

    </div>

    <div class="row">

        <div class="input-field col s12">

            <textarea class="materialize-textarea" placeholder="Nachricht" name="guestbook[message]" id="" cols="30" rows="10"><?= (!empty($edit_entrie)) ? $edit_entrie[0]['guestbook_message'] : "" ?></textarea>

        </div>

    </div>

    <div class="row">

        <div class="input-field col s12">

            <input type="submit" name="<?= (!empty($edit_entrie)) ? "guestbook[update]" : "guestbook[submit]" ?>" " value="Hochladen">

            <input type="hidden" name="guestbook[id]" value="<?= $_GET['edit'] ?>">

        </div>

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