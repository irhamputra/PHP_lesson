<?php


function registerUser(){
    if($_POST["register"]["submit"]){

        // Formular auswertungsbedingungen
        /*
         if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
          Valid
         } else {
          Not Valid
         }
         */

        if(true){
            $to = $_POST['register']['email'];
            $subject = "Test";
            $msg = "Hallo \n";
            $msg .= "Dies ist eine automatische Nachricht\n\n";
            $msg .= "Hier dein Passwort:" . $_POST['register']['password'] . "\n\n";
            $msg .= "vG - Das System";

            $headers = "From: no-reply@cowdz.de\n"
                ."Content-Type: text/plain\n";

            if(mail($to, $subject, $msg, $headers)){
                addStatusMessage("E-Mail Versandt!");
            }else{
                addStatusMessage("Versand Fehlgeschlagen");
            }
        }
    }
}