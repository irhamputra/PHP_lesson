<?php
/**
 * Created by PhpStorm.
 * User: mstoc
 * Date: 18.04.2016
 * Time: 15:48
 */

// Note: Session 4
/**
 * Läd eine Datei in den Uploads-Ordner auf dem Server hoch.
 * @return void
 */
function upload_file(){
    if(isset($_FILES)){
        // print_r($_FILES);
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            $dir = "uploads/";
            $dest = $dir . str_replace(" ", "_", $_FILES['file']['name']);
            if(move_uploaded_file($_FILES['file']['tmp_name'], $dest)){
                addStatusMessage("Datei erfolgreich hochgeladen!");
            }else{
                addStatusMessage("Upload Fehlgeschlagen!");
            }

        }
    }
}