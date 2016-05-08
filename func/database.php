<?php
	/**
	 * Created by PhpStorm.
	 * User: mstoc
	 * Date: 19.04.2016
	 * Time: 16:42
	 */

// Note: Session 5
function create_gb(){
	global $db;
	if(isset($_POST['guestbook']['submit'])){
		$sql = "INSERT INTO guestbook (guestbook_username, guestbook_message)
				VALUES (:username, :message)";
		$stmt = $db->prepare($sql);
		$stmt->execute(
			array(
				':username' => $_POST['guestbook']['username'],
				':message' => $_POST['guestbook']['message']
			)
		);
	}
}

function read_gb(){
	global $db;
	$sql = "SELECT * FROM guestbook ORDER BY guestbook_created DESC";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function update_gb(){
	global $db;
	
	
	if(isset($_POST["guestbook"]["update"])){
		$sql = 'UPDATE guestbook 
				SET guestbook_username = :username, guestbook_message = :message 
				WHERE guestbook_id = :id';
		$stmt = $db->prepare($sql);
		$stmt->execute(
			array(
				':id' => $_POST['guestbook']['id'],
				':username' => $_POST['guestbook']['username'],		
				':message' => $_POST['guestbook']['message']		
			)
		);
		
	}else{
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

function delete_gb(){
	global $db;
	$sql = "DELETE FROM guestbook WHERE guestbook_id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(
		array(
			':id' => $_GET['delete']
		)
	);
}

// USERS Note: Session 6

function delete_user(){
	global $db;
	$sql = "DELETE FROM users WHERE users_id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(
		array(
			':id' => $_GET['delete']
		)
	);
}

function update_user(){
	global $db;


	if(isset($_POST["user_edit"]["update"])){
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
		header("Location: index.php?backend&p=user-edit");
		exit();
	}else{
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

function read_all_users(){
	global $db;
	$sql = "SELECT * FROM users ORDER BY users_id DESC";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}