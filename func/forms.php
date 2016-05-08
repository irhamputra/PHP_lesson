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
            // Note: Session 6
            global $db;
            $sql = "INSERT INTO users (users_username, users_password, users_email, users_status)
                    VALUES (:username, :password, :email, :status)";
            $stmt = $db->prepare($sql);
            $stmt->execute(
                array(
                    ':username' => $_POST['register']['first_name'],
                    ':password' => md5($_POST['register']['password']),
                    ':email' => $_POST['register']['email'],
                    ':status' => 1
                )
            );
            // Todo : Double Opt in
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