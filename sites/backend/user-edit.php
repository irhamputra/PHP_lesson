<h4>Benutzer Editieren</h4>
<div class="row">
    <table class="striped white">
        <thead>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $row => $user): ?>
            <tr>
                <td><?= $user['users_id'] ?></td>
                <td><?= $user['users_username'] ?></td>
                <td><?= $user['users_email'] ?></td>
                <td><?= $user['users_status'] ?></td>
                <td><a href="index.php?backend&amp;p=user-edit&amp;action=edit&amp;edit=<?= $user['users_id'] ?>">EDIT</a></td>
                <td><a href="index.php?backend&amp;p=user-edit&amp;action=delete&amp;delete=<?= $user['users_id'] ?>">DELETE</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Note: SESSION 6 -->
<?php if(isset($user_edit) && !empty($user_edit)) : ?>
    <form action="" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input id="username" type="text" name="user_edit[username]" value="<?= $user_edit[0]['users_username'] ?>" class="validate">
                <label for="username">Benutzername</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" type="text" name="user_edit[email]" value="<?= $user_edit[0]['users_email'] ?>" class="validate">
                <label for="email">E-Mail-Adresse</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="status" type="text" name="user_edit[status]" value="<?= $user_edit[0]['users_status'] ?>" class="validate">
                <label for="status">Status</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="hidden" name="user_edit[id]" value="<?= $user_edit[0]['users_id'] ?>">
                <input id="submit" type="submit" value="Update" name="user_edit[update]" class="btn validate">
            </div>
        </div>
    </form>

<?php endif; ?>
