
<?php if(!isset($_GET['allowed'])) : ?>
<form action="" method="post">
    <div>
        <label for="forgot_pw">E-Mail Adresse</label>
        <input type="email" name="forgot_pw[email]" id="forgot_pw"/>
    </div>
    <div>
        <input type="submit" name="forgot_pw[submit]" value="Passwort anfordern">
    </div>
</form>
    <?php else : ?>
    <form action="" method="post">
        <div>
            <label for="">Neues Passwort</label>
            <input type="password" name="new_pass[pw_one]" id=""/>
        </div>
        <div>
            <label for="">Passwort wiederholen</label>
            <input type="password" name="new_pass[pw_two]" id=""/>
        </div>
        <div>
            <input type="submit" name="new_pass[submit]" value="Passwort ändern">
        </div>
    </form>
<?php endif; ?>