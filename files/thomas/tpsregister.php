
<!-- <div class="row">

    <h5>Login</h5>

    <form class="col s12">

        <div class="row">

            <div class="input-field col s6">

                <input id="first_name" type="text" class="validate">

                <label for="first_name">First Name</label>

            </div>

            <div class="input-field col s6">

                <input id="last_name" type="text" class="validate">

                <label for="last_name">Last Name</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">

                <input id="submit" type="submit" value="Login" class="btn validate">

            </div>

        </div>

    </form>

    <p>Sie sind noch nicht registriert ? Hier registrieren</p>

</div> -->

<?php
	$message = array();
	if (!empty($_POST)) {
		if (
			empty($_POST['f']['username']) ||
			empty($_POST['f']['firstname']) ||
			empty($_POST['f']['lastname']) ||
			empty($_POST['f']['usermail']) ||
			empty($_POST['f']['password']) ||
			empty($_POST['f']['password_again'])
		) {
			$message['error'] = 'Es wurden nicht alle Felder ausgefüllt.';
		} else if ($_POST['f']['password'] != $_POST['f']['password_again']) {
			$message['error'] = 'Die eingegebenen Passwörter stimmen nicht überein.';
		} else {
			unset($_POST['f']['password_again']);
			$salt = ''; 
			for ($i = 0; $i < 22; $i++) { 
				$salt .= substr('./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789', mt_rand(0, 63), 1); 
			}
			$_POST['f']['password'] = crypt(
				$_POST['f']['password'],
				'$2a$10$' . $salt
			);
 
			$mysqli = @new mysqli('localhost', 'root', '', 'loginsystem');
			if ($mysqli->connect_error) {
				$message['error'] = 'Datenbankverbindung fehlgeschlagen: ' . $mysqli->connect_error;
			}
			$query = sprintf(
				"INSERT INTO users (username, password)
				SELECT * FROM (SELECT '%s', '%s') as new_user
				WHERE NOT EXISTS (
					SELECT username FROM users WHERE username = '%s'
				) LIMIT 1;",
				$mysqli->real_escape_string($_POST['f']['username']),
				$mysqli->real_escape_string($_POST['f']['firstname']),
				$mysqli->real_escape_string($_POST['f']['lastname']),
				$mysqli->real_escape_string($_POST['f']['usermail']),
				$mysqli->real_escape_string($_POST['f']['password']),
				$mysqli->real_escape_string($_POST['f']['username'])
			);
			$mysqli->query($query);
			if ($mysqli->affected_rows == 1) {
				$message['success'] = 'Neuer Benutzer (' . htmlspecialchars($_POST['f']['username']) . ') wurde angelegt, <a href="login.php">weiter zur Anmeldung</a>.';
				header('Location: http://' . $_SERVER['HTTP_HOST'] . '/login.php');
			} else {
				$message['error'] = 'Der Benutzername ist bereits vergeben.';
			}
			$mysqli->close();
		}
	} else {
		$message['notice'] = 'Übermitteln Sie das ausgefüllte Formular um ein neues Benutzerkonto zu erstellen.';
	}
?>

<div class="row">



    <h5>Neu Registrieren</h5>

    <form class="col s12">
	
	
	  <div class="row">

            <div class="input-field col s12">

                <input id="username" type="text" class="validate">

                <label for="username">Benutzername</label>

            </div>
	
        <div class="row">
			
			
            <div class="input-field col s6">

                <input id="first_name" type="text" class="validate">

                <label for="first_name">First Name</label>

            </div>

            <div class="input-field col s6">

                <input id="last_name" type="text" class="validate">

                <label for="last_name">Last Name</label>

            </div>

        </div>

				<div class="row">

            <div class="input-field col s12">

                <input id="password" type="password" class="validate">

                <label for="password">Password</label>

            </div>

        </div>
		
		        <div class="row">

            <div class="input-field col s12">

                <input id="passwordrepeat" type="password" class="validate">

                <label for="passwordrepeat">Password wiederholen</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">

                <input id="email" type="email" class="validate">

                <label for="email">Email</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">

                <input id="submit" type="submit" class="btn validate">

            </div>

        </div>

    </form>

</div>