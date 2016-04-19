<?php

// Note : Session 2 Thema: Seitensteuerung

/**
 * Seiten autmatisch generieren nach Navigationsarray.
 * Prüft das array $arrNav auf zweite Ebene und generiert die
 * Template-Files in den Ordner
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
}

/** Aufruf der Funktion bei jedem Seitenreload,
 * es soll permanent geprüft werden ob eine neue Seite angelegt wurde
 */
generate_pagefiles();


/**
 * Iteriert durch das Seiten-Array und fügt die GET_Parameter einer Whitelist hinzu.
 * Der aktuelle Get-Parameter wird mit der Whitelist abgeglichen und die Seite wird geladen. Damit können keine undefinierten
 * Seiten aufgerufen werden.
 * @return string url of requested site
 */
function load_validated_page(){
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

    //print_r($arrWhitelist);

    // Checkt Get Werte ob sie erlaubt sind.
    if(isset($_GET['p'])){
        if(in_array($_GET['p'], $arrWhitelist)){
            return _SITEDIR_ . $_GET['p'] . ".php";
        }else{
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
 * @return string Liste mit Fehlern
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

/** Lade Seitenspezifische Funktionen.
 * Ich brauche nicht alle Funktionalität auf jeder seite.
*/
if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'home':
            include "func/login.php";
            logout();
            break;

        case 'contact':
            break;

        case 'login':
            // Note Session 4
            // Pfad vom ersten Include der Datei ist der Ausgangspfad
            include "func/forms.php";
            registerUser();
            
            // Note: Session 5
            include "func/login.php";
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
            create();
            if($_GET['action'] == "delete"){
                delete();
            }
            if($_GET['action'] == "edit"){

            }
            $entries = read();
          break;

    }
}
