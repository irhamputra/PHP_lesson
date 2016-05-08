<?php
/**
 * Created by PhpStorm.
 * User: mstoc
 * Date: 04.05.2016
 * Time: 13:02
 */

function send_forgotten_password_link(){
    global $db;
    if(isset($_POST['forgot_pw']['submit'])){
        $sql = "SELECT users_email FROM users WHERE users_email = :email";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':email' => $_POST['forgot_pw']['email']
            )
        );
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($res);
        echo '</pre>';

        if(empty($res)){
            addStatusMessage("Falsche Email-adresse");
        }else{
            //$token = md5(rand(0,99900) . "hasdkyxbvudsrhnsdbhds!!!'Äasäasdä");
            $to = $_POST['forgot_pw']['email'];
            $subject = "Passwort Zurücksetzen";
            $msg = "Hallo \n";
            $msg .= "Dies ist eine automatische Nachricht\n\n";
            $msg .= "<a href='http://www.mstockenberg.de/wdd_915/index.php?allowed&p=forgot_password'>reset Password</a> "."\n\n";
            $msg .= "vG - Das System";

            $headers = "From: lost_password@cowdz.de\n"
                ."Content-Type: text/plain\n";

            if(mail($to, $subject, $msg, $headers)){
                addStatusMessage("E-Mail Versandt!");
            }else{
                addStatusMessage("Versand Fehlgeschlagen");
            }
        }
    }
    //$stmt = $db
}

function reset_password(){
    if(isset($_POST['new_pass']['submit'])){
        global $db;
        if($_POST['new_pass']['pw_one'] == $_POST['new_pass']['pw_two']){
            $sql = "UPDATE users SET users_password = :newpass";
            $stmt = $db->prepare($sql);
            $stmt->execute(
                array(
                    ':newpass' => md5($_POST['new_pass']['pw_one'])
                )
            );
            header("location: index.php?&newpass&p=login");
            exit();
        }else{
            addStatusMessage("Passwörter stimmen nicht überein!");
        }
    }
}