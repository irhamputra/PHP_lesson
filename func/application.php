<?php

// Note : Session 2 Thema: Seitensteuerung

/**
 * Seiten autmatisch generieren nach Navigationsarray.
 * Prüft das array $arrNav auf zweite Ebene und generiert die
 * Template-Files in den Ordner Sites/Frontend L:14 und Sites Backend L: 32
 * @return void
 */

/**
 * Generates Pagefiles from ArrNav, generates Files in Sites/frontend, Sites Backend.
 * @return void
 */
function generate_pagefiles()
{
    global $arrNav;
    foreach ($arrNav['frontend'] as $pagekey => $page) {
        // Dimension 2 arrNav
        if (isset($page["2nd-level-menu"])) {
            foreach ($page['2nd-level-menu'] as $scnd_level_key => $scnd_lvl_page) {
                $get_value = explode("=", $scnd_lvl_page["href"]);
                if (!file_exists(_SITEDIR_ . $get_value[1] . ".php")) {
                    fopen(_SITEDIR_ . $get_value[1] . ".php", "w+");
                }
            }
            // Dimension 1 arrNav
        } else {
            $get_value = explode("=", $page["href"]);
            if (!file_exists(_SITEDIR_ . $get_value[1] . ".php")) {
                fopen(_SITEDIR_ . $get_value[1] . ".php", "w+");
            }
        }
    }
    // Note: SESSION 6
    foreach ($arrNav['backend'] as $pagekey => $page) {
        // Dimension 2 arrNav
        if (isset($page["2nd-level-menu"])) {
            foreach ($page['2nd-level-menu'] as $scnd_level_key => $scnd_lvl_page) {
                $get_value = explode("=", $scnd_lvl_page["href"]);
                if (!file_exists(_SITEDIR_ADMIN_ . $get_value[1] . ".php")) {
                    fopen(_SITEDIR_ADMIN_ . $get_value[1] . ".php", "w+");
                }
            }
            // Dimension 1 arrNav
        } else {
            $get_value = explode("=", $page["href"]);
            if (!file_exists(_SITEDIR_ADMIN_ . $get_value[1] . ".php")) {
                fopen(_SITEDIR_ADMIN_ . $get_value[1] . ".php", "w+");
            }
        }
    }
}

/** Aufruf der Funktion bei jedem Seitenreload,
 * es soll permanent geprüft werden ob eine neue Seite angelegt werden soll.
 */
generate_pagefiles();


/**
 * Iteriert durch das Seiten-Array und fügt die GET_Parameter einer Whitelist hinzu.
 * Der aktuelle Get-Parameter wird mit der Whitelist abgeglichen und die Seite wird geladen. Damit können keine undefinierten
 * Seiten aufgerufen werden.
 * @return string url of requested site
 */
function load_validated_page(){
    // Note: was ist, wenn die Seite nicht in der Navigation angezeigt werden soll, ABER trotzdem validiert werden soll?
    $arrWhitelist = array();
    global $arrNav;

    // Schreibt GET-Werte in Whitelist
    foreach($arrNav["frontend"] as $key => $page){
        if(isset($page["2nd-level-menu"])){
            foreach($page["2nd-level-menu"] as $scnd_level_key => $scnd_level_page){
                $get_value = explode("=", $scnd_level_page['href']);
                $arrWhitelist[] = $get_value[1];
            }
        }else{
            $get_value = explode("=", $page['href']);
            $arrWhitelist[] = $get_value[1];
        }
    }
    // Note: Session 6
    // Wenn der Nutzer eingeloggt ist, schreibe GET-Werte fürs Backend in Whitelist
    if(isset($_SESSION['credentials']['status'])){
        foreach($arrNav["backend"] as $key => $page){
            if(isset($page["2nd-level-menu"])){
                foreach($page["2nd-level-menu"] as $scnd_level_key => $scnd_level_page){
                    $get_value = explode("=", $scnd_level_page['href']);
                    $arrWhitelist[] = $get_value[1];
                }
            }else{
                $get_value = explode("=", $page['href']);
                $arrWhitelist[] = $get_value[1];
            }
        }
    }
    // Note: Session 6

    //print_r($arrWhitelist);

    // Checkt Get Werte ob sie erlaubt sind.
    if(isset($_GET['p'])){
        if(in_array($_GET['p'], $arrWhitelist)){
            // Wenn eingeloggt, dann lade Seiten aus einem anderen Ordner
            if(isset($_SESSION['credentials']['status']) && isset($_GET['backend'])){
                return _SITEDIR_ADMIN_ . $_GET['p'] . ".php";
            }else{
                return _SITEDIR_ . $_GET['p'] . ".php";
            }
        }else{
            echo "test3";
            return _SITEDIR_ . "home.php";
        }
    }else{
        return _SITEDIR_ . "home.php";
    }
}

// Note : Session 3 Thema Status / Session / Cookie / Switch-Case
/**
 * Fügt eine Fehlermeldung zu dem Statusarray hinzu
 * @param string $message
 * @return void
 */
function addStatusMessage($message){
    global $arrStatus;
    $arrStatus[] = $message;
}


/**
 * Liest das Statusarray aus und gibt eine html fehlerliste zurück.
 * @return string Liste mit Fehlern, formatiert in HTML Syntax UL->Li
 */
function readStatus(){
    global $arrStatus;
    if(!empty($arrStatus)){
        $output = "<ul class='error'>";
        foreach($arrStatus as $key => $message){
            $output .= "<li>" . $message . "</li>";
        }
        $output .= "</ul>";
        return $output;
    }else{
        return "";
    }
}

/* Note: Session 6
 * Wechselt zwischen frontend und Backend navigation.
 * @return string arrNav key
 */
function switch_navigation(){
    if(isset($_GET['backend']) && isset($_SESSION['credentials']['status'])){
        return "backend";
    }else{
        return "frontend";
    }
}

/** Lade Seitenspezifische Funktionen.
 * Ich brauche nicht alle Funktionalität auf jeder seite.
*/
if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'forgot_password':
            include "func/forgot_pw.php";
            send_forgotten_password_link();
            reset_password();
            break;

        case 'home':
            break;

        case 'contact':
            break;

        case 'login':
            // Note Session 4
            // Pfad vom ersten Include der Datei ist der Ausgangspfad
            include "func/forms.php";
            registerUser();
            
            // Note: Session 5
            login($_POST['login']);
            break;

        case 'shop':
            // Pfad vom ersten Include der Datei ist der Ausgangspfad
            include "func/shop.php";
            addToCart();
            break;
        // Note: Session 4
        case 'upload':
            // Pfad vom ersten Include der Datei ist der Ausgangspfad
            include "func/upload.php";
            upload_file();
            break;

        // Note: Session 5
        case 'guestbook':
            include "func/database.php";
            create_gb();
            if($_GET['action'] == "delete"){
                delete_gb();
            }
            if($_GET['action'] == "edit"){
                $edit_entrie = update_gb();
            }
            $entries = read_gb();
          break;

        // Note: Session 6
        case 'user-edit':
            include "func/database.php";
            if($_GET['action'] == "delete"){
                delete_user();
            }
            if($_GET['action'] == "edit"){
                $user_edit = update_user();
            }
            $users = read_all_users();
            break;

        case 'homework-edit':
            include "func/database.php";
            create_homeworks();
            if($_GET['action'] == "delete"){
                delete_homework();
            }
            if($_GET['action'] == "edit"){
                $homeworks_edit = update_homework();
            }
            $homeworks = read_all_homeworks();
            break;

        case 'hausaufgabe':
            include "func/database.php";
            $homeworks = read_all_homeworks();
            break;

        case 'shipping':
            if(isset($_POST['shipping']['submit'])){
                // NOTE: IMPORTANT validate!! before live, before productive use
                $_SESSION['shipping'] = $_POST['shipping'];
                header("Location: " . _BASE_ . "?p=payment");
                exit();
            }
            break;

        case 'payment':
            if(isset($_POST['payment']['submit'])){
                // NOTE: IMPORTANT validate!! before live, before productive use
                $_SESSION['payment'] = $_POST['payment'];
                header("Location: " . _BASE_ . "?p=confirm");
                exit();
            }
            break;
    }
}
