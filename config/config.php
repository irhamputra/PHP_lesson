<?php
// Konstante für Navgation enthält index.php
// Note : SESSION 1
define("_BASE_", $_SERVER['PHP_SELF']);

// Definiere den Seitenordner
define("_SITEDIR_", "sites/frontend/");
define("_SITEDIR_ADMIN_", "sites/backend/");

// Note : SESSION 4 & 5
// Database Credentials
function setupEnvironment(){
    //if(preg_match("/(localhost)/", $_SERVER['HTTP_HOST'])){
      /*  define("_USER_", "root");
        define("_PASSWORD_", "");
        define("_DBNAME_", "php_915");
        define("_DBHOST_", "localhost"); */
    //}else{

        define("_USER_", "db450699_24");
        define("_PASSWORD_", "0815@php915");
        define("_DBNAME_", "db450699_24");
        define("_DBHOST_", "mysql5.cowdz.rocks");
    //}
}


// Array für Menupunkte
// Note : SESSION 1
$arrNav = array(
    "frontend" => array(
        0 => array(
            "href" => _BASE_ . "?p=home",
            "title" => "Home",
            "classes" => ""
        ),
        1 => array(
            "href" => "#",
            "title" => "Unternehmen",
            "classes" => "submenu",
            "2nd-level-menu" => array(
                0 => array(
                    "href" => _BASE_ . "?p=about",
                    "title" => "About",
                    "classes" => "submenu"
                ),
                1 => array(
                    "href" => _BASE_ . "?p=jobs",
                    "title" => "Jobs",
                    "classes" => ""
                ),
            )
        ),
        10 => array(
            "href" => _BASE_ . "?p=hausaufgabe",
            "title" => "Hausaufgabe",
            "classes" => ""
        ),
        9 => array(
            "href" => "#",
            "title" => "Arbeitsbereich",
            "classes" => "submenu",
            "2nd-level-menu" => array(
                0 => array(
                    "href" => _BASE_ . "?p=fatimah",
                    "title" => "Fatimah",
                    "classes" => ""
                ),
                1 => array(
                    "href" => _BASE_ . "?p=catur",
                    "title" => "Catur",
                    "classes" => ""
                ),
                3 => array(
                    "href" => _BASE_ . "?p=prasetyo",
                    "title" => "Prasetyo",
                    "classes" => ""
                ),
                4 => array(
                    "href" => _BASE_ . "?p=zaini",
                    "title" => "Zaini",
                    "classes" => ""
                ),
                5 => array(
                    "href" => _BASE_ . "?p=lena",
                    "title" => "Lena",
                    "classes" => ""
                ),
                6 => array(
                    "href" => _BASE_ . "?p=leonie",
                    "title" => "Leonie",
                    "classes" => ""
                ),
                7 => array(
                    "href" => _BASE_ . "?p=thomas",
                    "title" => "Thomas",
                    "classes" => ""
                ),
                10 => array(
                    "href" => _BASE_ . "?p=nuke",
                    "title" => "Nuke",
                    "classes" => ""
                ),
            )
        ),
        13 => array(
            "href" => _BASE_ . "?p=upload",
            "title" => "Upload",
            "classes" => ""
        ),
        5 => array(
            "href" => _BASE_ . "?p=shop",
            "title" => "Shop",
            "classes" => ""
        ),
        12 => array(
            "href" => _BASE_ . "?p=cart",
            "title" => "Warenkorb",
            "classes" => ""
        ),
        6 => array(
            "href" => _BASE_ . "?p=guestbook",
            "title" => "Gästebuch",
            "classes" => ""
        ),
        2 => array(
            "href" => _BASE_ . "?p=contact",
            "title" => "Kontakt",
            "classes" => ""
        ),
        // Note: Session 6

        /*  (Bedingung) ? True : (False)      */
        7 => array(
            "href" => (isset($_SESSION['credentials']['status'])) ? _BASE_ . "?backend&p=dashboard" : _BASE_ . "?p=login",
            "title" => (isset($_SESSION['credentials']['status'])) ? "Dashboard" : "Login",
            "classes" => "",
        ),
        15 => array(
            "href" => _BASE_ . "?p=forgot_password",
            "title" => "",
            "classes" => "hidden"
        ),

    ),
    // Note: Session 6
    "backend" => array(
        1 => array(
            "href" => _BASE_ . "?backend&p=dashboard",
            "title" => "Dashboard",
            "classes" => ""
        ),
        2 => array(
            "href" => _BASE_ . "?backend&p=user-edit",
            "title" => "Benutzer editieren",
            "classes" => ""
        ),
        3 => array(
            "href" => _BASE_ . "?action=logout",
            "title" => "Logout",
            "classes" => ""
        ),

    )
);
// Note : SESSION 3
$arrStatus = array();

$arrHomework = array(
    "12.04.16" => array(
        "desc" => "Expermientiert mit fopen, fclose, fwrite, fread, file_get_contents, und file(); alternativ mit readfile();",
        "additional_infos" => "<ul>
        <li><a href=\"http://php.net/manual/en/function.fopen.php\">fopen</a></li>
        <li><a href=\"http://php.net/manual/de/function.fwrite.php\">fwrite</a></li>
        <li><a href=\"http://php.net/manual/en/function.fread.php\">fread</a></li>
        <li><a href=\"http://php.net/manual/en/function.fclose.php\">fclose</a></li>
        <li><a href=\"http://php.net/manual/en/function.file-get-contents.php\">file_get_contents()</a></li>
        <li><a href=\"http://php.net/manual/en/function.file.php\">file()</a></li>
        <li><a href=\"http://php.net/manual/en/function.readfile.php\">readfile</a></li>
        </ul>"
    ),
    "14.04.16" => array(
        "desc" => "Baut für das Registrierungsformular eine eigene Auswertung. Übernehmt dafür den HTML Quelltext aus der Loginseite auf eure eigene Seite (Nur registrierung)
        und prüft ob alle Felder ausgefüllt sind. Alle Felder sind Pflichtfelder. Wenn der nutzer alle Felder ausgefüllt hat, also keine Fehler existieren, wird eine e-mail verschickt.
        Die Beste Registrierungsroutine wird in die Anwendung übernommen. Viel Spaß :)",
        "additional_infos" => "Den Mailversand machen wir zusammen in der Vorlesung. Bitte konzentriert euch auf die Auswertung der Inputfelder."
    )
);

$arrProducts = array(
    0 => array(
        "name" => "Staubsauger",
        "details" => "Saugt und Staubt",
        "price" => 359.99
    ),
    1 => array(
        "name" => "Kopfhörer",
        "details" => "Hört im Kopf",
        "price" => 159.99
    ),
    2 => array(
        "name" => "Mutti-Mixer",
        "details" => "Mixt Muttis",
        "price" => 140.00
    )
);