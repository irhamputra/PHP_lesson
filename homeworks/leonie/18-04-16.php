<?php

$first_name = $_POST ['first_name'];
$last_name =  $_POST ['last_name'];
$password =   $_POST ['Password'];
$EMail =      $_POST ['Email'];


if (isset ($_POST['submit']))


// Sind alle Felder ausgefüllt
if (empty($first_name)){
echo ("Bitte einen Vornamen eingeben!");
}

if (empty($last_name)){
echo ("Bitte einen Nachnamen eingeben!");
}

if (empty($password)){
echo ("Bitte ein Passwort eingeben!");
}

if (empty($EMail)){
echo ("Bitte eine EMail Adresse eingeben!");
}
?>


<div class="row">
    <h5>Neu Registrieren</h5>
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
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="submit" type="submit" class="btn validate">
            </div>
        </div>
    </form>
</div>