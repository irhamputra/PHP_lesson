<?php
function login ($data) {
	global $db;
	if (isset ($data ['submit'])) {
		if (empty ($data ['username']) || empty ($data ['password'])) {
			addStatusMessage ("Bitte fülle alle Felder aus");
		}else{
			$sgl = "SELECT * FROM users
					WHERE users_username = :username
					AND users_password = :password";
			$stmt = $db-> prepare ($sql);
			$stmt-> execute (
				array(
					':username => $data ['username'],
					':password' => md5 ($data ['password']),
				)
			);
			$res= $stmt->fetchAll (PDO :: FETCH_ASSOC);

			if($res > 0) {
				$_SESSION ['credentials'] ['status'] = $res [0] ['users_status'];
				$_SESSION ['credentials'] ['email'] = $res [0] ['users_email'];

				header ("Location: index.php?p=home");
				exit ();
			}
		}
	}
}

function logout () {
	if (isset ($_GET ['action]) && $_GET ['action'] == "logout") {
				$_SESSION = array ();
				session_destroy ();
			}
}