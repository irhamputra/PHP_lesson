<?php function ha3(){

?>

<?php
		echo "		
			<div>			
				<p>
				<font color='red'><b>HA-3 vom 14.4.16: PHP - Registrierung</b></font>
				<br />Baut für das Registrierungsformular eine eigene Auswertung von der Loginseite... (Nur registrierung) und prüft ob alle Felder ausgefüllt sind. Alle Felder sind Pflichtfelder. Wenn der Nutzer alle Felder ausgefüllt hat, also keine Fehler existieren, wird eine e-mail verschickt.</b>
				<br />
				<br />Lösungshinweis: Session, Datenbankeintrag, Benutzername und doppelter Passwortcheck kommt noch... 
				
				</p>		
			</div>		
		";

?>



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

</div>

-->
<?php
if (isset ($_GET ['senden'])){
		// zum testen echo "Abgesendet";

		 if (empty ($_GET ['first_name'])OR empty ($_GET ['last_name'])OR empty ($_GET ['password'])OR empty ($_GET ['email'])){
		 $status ="<p style='color: red;'><b>Bitte alle Felder ausf&uuml;llen!</b></p>";		 
		 }

		if (isset ($status)){
			echo $status;	
		}
		else {
		echo "<p style='color: red;'><b>Registrierung erfolgreich!</b></p>";
	}
}

?>	
<div class="row">



    <h5>Neu Registrieren</h5>

    <form methode="GET" action="index.php?" class="col s12">
	
	<input name="p" type="hidden" value="thomas">
        <div class="row">

            <div class="input-field col s6">

                <input id="first_name" name ="first_name" type="text" class="validate">

                <label for="first_name">First Name</label>
				
				

            </div>		

            <div class="input-field col s6">

                <input id="last_name" name ="last_name" type="text" class="validate">

                <label for="last_name">Last Name</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">

                <input id="password" type="password" name="password" class="validate">

                <label for="password">Password</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">

                <input id="email" type="email" name="email" class="validate">

                <label for="email">Email</label>

            </div>

        </div>

        <div class="row">

            <div class="input-field col s12">
	
			
                <input id="submit" type="submit" name="senden" class="btn validate">
	
            </div>


        </div>

    </form>

</div>

<?php }
?>