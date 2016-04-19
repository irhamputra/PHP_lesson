<?php
	/**
	 * Created by PhpStorm.
	 * User: mstoc
	 * Date: 19.04.2016
	 * Time: 16:14
	 */
// Note: Session 5
/**
 * Loggt den Benutzer in die Seite ein.
 * Prüft oft eine Eingabe exisitert und schreibt bei erfolgreichem Login den Benutzer in die Session.
 * @param $data $_POST['login'] Array mit Login-Informationen
*/
function login($data){
	global $db;
	if(isset($data['submit'])){
		if(empty($data['username']) || empty($data['password'])){
			addStatusMessage("Bitte fülle alle Felder aus");
		}else{
			$sql = "SELECT * FROM users 
					WHERE users_username = :username 
					AND users_password = :password";
			$stmt = $db->prepare($sql);
			$stmt->execute(
				array(
					':username' => $data['username'],
					':password' => md5($data['password']),
				)
			);
			$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

			//print_r($res);

			if($res > 0){
				$_SESSION['credentials']['status'] = $res[0]['users_status'];
				$_SESSION['credentials']['email'] = $res[0]['users_email'];

				header("Location: index.php?p=home");
				exit();
			}

		}
	}
}

/**
 * Loggt den Benutzer aus
 */
function logout(){

	if(isset($_GET['action']) && $_GET['action'] == "logout"){
		unset($_SESSION);
		$_SESSION = array();
		session_destroy();

		//header("Location: index.php?p=login");
		//exit();
	}
}