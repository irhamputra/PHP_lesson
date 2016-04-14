<?php
// Konstante für Navgation enthält index.php
define("_BASE_", $_SERVER['PHP_SELF']);

// Definiere den Seitenordner
define("_SITEDIR_", "sites/frontend/");

// Array für Menupunkte
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
        5 => array(
            "href" => _BASE_ . "?p=shop",
            "title" => "Shop",
            "classes" => ""
        ),
        6 => array(
            "href" => _BASE_ . "?p=guestbook",
            "title" => "Gästebuch",
            "classes" => ""
        ),
        8 => array(
            "href" => _BASE_ . "?p=chat",
            "title" => "Chat",
            "classes" => "",
        ),
        2 => array(
            "href" => _BASE_ . "?p=contact",
            "title" => "Kontakt",
            "classes" => ""
        ),
        3 => array(
            "href" => _BASE_ . "?p=toc",
            "title" => "AGB",
            "classes" => ""
        ),
        4 => array(
            "href" => _BASE_ . "?p=imprint",
            "title" => "Impressum",
            "classes" => ""
        ),
        7 => array(
            "href" => _BASE_ . "?p=login",
            "title" => "Login",
            "classes" => "",
        )
    ),
    "backend" => array()
);

$arrStatus = array();