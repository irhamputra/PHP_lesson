<?php
/**
 * Created by PhpStorm.
 * User: mstoc
 * Date: 19.04.2016
 * Time: 16:42
 */

function filterInput($input){
    return htmlspecialchars(strip_tags($input));
}

// Note: Session 5
function create_gb()
{
    global $db;
    if (isset($_POST['guestbook']['submit'])) {
        if (empty($_POST['guestbook']['username'])
            && empty($_POST['guestbook']['message']))
        {
            addStatusMessage("Bitte beide Felder ausfüllen!");
        } else {

            $sql = "INSERT INTO guestbook (guestbook_username, guestbook_message)
					VALUES (:username, :message)";
            $stmt = $db->prepare($sql);
            $stmt->execute(
                array(
                    ':username' => filterInput($_POST['guestbook']['username']),
                    ':message' => filterInput($_POST['guestbook']['message'])
                )
            );
            addStatusMessage("Eintrag wurde gespeichert!");
        }
    }
}

function read_gb()
{
    global $db;
    $sql = "SELECT * FROM guestbook ORDER BY guestbook_created DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $res;
}

function update_gb()
{
    global $db;


    if (isset($_POST["guestbook"]["update"])) {
        $sql = 'UPDATE guestbook 
				SET guestbook_username = :username, guestbook_message = :message 
				WHERE guestbook_id = :id';
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $_POST['guestbook']['id'],
                ':username' => filterInput($_POST['guestbook']['username']),
                ':message' => filterInput($_POST['guestbook']['message'])
            )
        );
        addStatusMessage("Nachricht editiert!");

    } else {
        $sql = "SELECT * FROM guestbook WHERE guestbook_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $_GET['edit']
            )
        );
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

}

function delete_gb()
{
    global $db;
    $sql = "DELETE FROM guestbook WHERE guestbook_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(
        array(
            ':id' => $_GET['delete']
        )
    );
    addStatusMessage("Nachricht erfolgreich gelöscht.");
}

// USERS Note: Session 6

function delete_user()
{
    global $db;
    $sql = "DELETE FROM users WHERE users_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(
        array(
            ':id' => $_GET['delete']
        )
    );
    addStatusMessage("User gelöscht!");
}

function update_user()
{
    global $db;


    if (isset($_POST["user_edit"]["update"])) {
        $sql = 'UPDATE users 
				SET users_username = :username, users_email = :email, users_status = :status
				WHERE users_id = :id';
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $_POST['user_edit']['id'],
                ':username' => $_POST['user_edit']['username'],
                ':email' => $_POST['user_edit']['email'],
                ':status' => $_POST['user_edit']['status']
            )
        );
        // Todo: find a clean way to perfom status messages after redirecting
        header("Location: index.php?backend&p=user-edit");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE users_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $_GET['edit']
            )
        );
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}

function read_all_users()
{
    global $db;
    $sql = "SELECT * FROM users ORDER BY users_id DESC";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function create_homeworks()
{
    global $db;
    if (isset($_POST['homeworks']['submit'])) {
        if(empty($_POST['homeworks']['description'])){
            addStatusMessage("BItte eine Nachricht eingeben");
        }else{
            $sql = "INSERT INTO homeworks (homework_description)
                    VALUES (:desc)";
            $stmt = $db->prepare($sql);
            $stmt->execute(
                array(
                    ':desc' => filterInput($_POST['homeworks']['description'])
                )
            );
            addStatusMessage("Hausaufgabe erstellt");
        }
    }
}

function delete_homework()
{
    global $db;
    $sql = "DELETE FROM homeworks WHERE homework_id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(
        array(
            ':id' => $_GET['delete']
        )
    );
    addStatusMessage("Hausaufgabe gelöscht.");
}

function update_homework()
{
    global $db;
    if (isset($_POST["homeworks"]["update"])) {
        $sql = 'UPDATE homeworks 
				SET homework_description = :desc
				WHERE homework_id = :id';
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => filterInput($_POST['homeworks']['id']),
                ':desc' => filterInput($_POST['homeworks']['description']),
            )
        );
        // Todo: status message problem with editing
        header("Location: index.php?backend&p=homework-edit");
        exit();
    } else {
        $sql = "SELECT * FROM homeworks WHERE homework_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->execute(
            array(
                ':id' => $_GET['edit']
            )
        );
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}

function read_all_homeworks()
{
    global $db;
    $sql = 'SELECT * FROM homeworks ORDER BY homework_date DESC';
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

