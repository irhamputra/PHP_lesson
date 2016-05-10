<?php
function registerUser () {
	if ($_POST ["register"] ["submit"]) {
		if (true) {
			$to = $_POST ['register'] ['email'];
			$subject = "Test";
			$msg = "Hallo \n";
			$msg .= "Dies ist eine automatische Nachricht\n\n";
			$msg .="Hier ist dein Passwort:" . $_POST ['register'] ['password'] . "\n\n";
			$msg .= "vG - Das System";

			$headers = "From: no-reply@cowdz.de\n"
				."Content-Type: text/plain\";
			if (mail ($to. $subject, $msg, $headers)) {
				addStatusMessage ("E-Mail Versandt!");
			}else{
				addStatusMessage ("Versand Fehlgeschlagen!");
			}
		}
	}
}