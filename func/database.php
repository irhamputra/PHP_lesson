<?php
	/**
	 * Created by PhpStorm.
	 * User: mstoc
	 * Date: 19.04.2016
	 * Time: 16:42
	 */

// Bei interesse könnt ihr auch das verwenden
/**
 * Example: get("SELECT * FROM users WHERE id = :id", array(":id" => 1));
 * @param $sql
 * @param array $execArr
 * @return array
 */
function get($sql, $execArr = array()){
	global $db;
	$stmt = $db->prepare($sql);
	$stmt->execute($execArr);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function set($sql, $execArr = array()){
	global $db;
	$stmt = $db->prepare($sql);
	$stmt->execute($execArr);
}



// Note: Session 5
function create(){
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

function read(){
	global $db;
	$sql = "SELECT * FROM guestbook ORDER BY guestbook_created DESC";
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function update(){

}

function delete(){
	global $db;
	$sql = "DELETE FROM guestbook WHERE guestbook_id = :id";
	$stmt = $db->prepare($sql);
	$stmt->execute(
		array(
			':id' => $_GET['delete']
		)
	);
}