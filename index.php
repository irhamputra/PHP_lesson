<?php
// Note: Session 3
// Startet eine Session beim User. Muss im Code an erster Stelle stehen und vor jeder HTML ausgabe passieren.
// session_start();

// NOTE: Session 1
include "config/config.php";
include "func/application.php";
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
    <div class="nav-wrapper">
        <ul id="nav-mobile">
            <?php $counter = 1; ?>
            <?php foreach($arrNav["frontend"] as $key => $menuitem) : ?>
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
<?php // echo readStatus(); ?>

<main class="container">
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
