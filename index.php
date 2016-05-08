<?php
// Note: Session 3
// Startet eine Session beim User. Muss im Code an erster Stelle stehen und vor jeder HTML ausgabe passieren.
session_start();

//print_r($_SESSION);

// Note: Session 4
// setcookie("MyCookie", TRUE, time()+3600, "/", ".cowdz.rocks", FALSE, TRUE);
// print_r($_COOKIE);


// NOTE: Session 1
include "config/config.php";

// Note: Session 5
setupEnvironment();

$db = new PDO("mysql:host="._DBHOST_.";dbname="._DBNAME_, _USER_, _PASSWORD_);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Einbindung des Loginskriptes in der Index, da man die Funktionen flexibel überall in der Applikation verwenden kann
include "func/login.php";

// Steuerung der Seite
include "func/application.php";

logout();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!-- Note: Session 1 -->
<nav>
    <div class="nav-wrapper grey darken-2">
        <ul id="nav-mobile">
            <li>
                <a href="<?= _BASE_ ?>?p=home" style="font-family: 'Courier New'; font-weight: bold;">m.S(t)</a>
            </li>
            <?php $counter = 1; ?>
            
            <?php foreach($arrNav[switch_navigation()] as $key => $menuitem) : ?>
                <li>
                    <a href="<?= $menuitem['href'] ?>" data-activates="dropdown<?=$counter;?>" class="<?= (isset($menuitem['2nd-level-menu'])) ? "dropdown-button" : "" ?>"><?= $menuitem['title'] ?></a>
                    <?php if(isset($menuitem['2nd-level-menu'])) :  ?>
                        <ul id="dropdown<?=$counter;?>" class="dropdown-content">
                            <?php foreach($menuitem['2nd-level-menu'] as $scdn_level_key => $scnd_level_item) : ?>
                                <li><a href="<?= $scnd_level_item['href']?>"><?= $scnd_level_item['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php $counter++; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>

<!-- Fehlerbehandlung -->
<!-- NOTE: Session 3-->
<div class="row red-text">
    <?php echo readStatus(); ?>
</div>
<main class="container">
    <div>
    <pre style="font-family: 'Courier New'; font-size: 36px; font-weight: bold;">
m.S(t)
 {<span style="font-size: 0.9em;">{web.</span><span style="color: darkorange; font-size: 0.9em;">Development</span><span style="font-size: 0.9em;">}</span>}
    <span style="font-size: 0.5em;">&copy; by Marten Stockenberg</span></pre>
    </div>
    <hr>
    <br/>
    <!-- NOTE: Session 2-->
    <?php include load_validated_page();?>
</main>

<footer class="page-footer grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</body>
</html>
