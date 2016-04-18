<?php

$arrRegistration = array (
	0 => array (
		"type"	=> "text",
		"name"	=> "first_name",
		"display" => "First Name*",
		"class_field" => "input-field col s6",
		"class_input" => "validate"
	),
	1 => array (
		"type"	=> "text",
		"name"	=> "last_name",
		"display" => "Last Name*",
		"class_field" => "input-field col s6",
		"class_input" => "validate"
	),	
	2 => array (
		"type"	=> "password",
		"name"	=> "password",
		"display" => "Password*",
		"class_field" => "input-field col s12",
		"class_input" => "validate"
	),	
	3 => array (
		"type"	=> "email",
		"name"	=> "email",
		"display" => "Email*",
		"class_field" => "input-field col s12",
		"class_input" => "validate"
	),
	4 => array (
		"type"	=> "submit",
		"name"	=> "submit",
		"display" => "Senden",
		"class_field" => "input-field col s12",
		"class_input" => "btn validate"
	),
);

//print_r ($arrRegistration);

$arrStatus = array ();
// $regex_email = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+$";

if (isset($_POST['submit'])) {
    foreach ($arrRegistration as $key => $input) {
		if (empty($_POST[$input['name']])) {
			$arrStatus[$input['name']] = "Bitte füllen Sie dieses Feld aus!";
			/*if ($input['name'] == 'email' AND !preg_match($regex_email, $_POST[$input['?']])){
				$arrStatus[$input['name']] = "Bitte geben Sie eine gültige E-Mail Adresse ein!";
			}*/
		}
    }
    if (empty($arrStatus)) {
        mail('lena.lehmann@email.de', 'Nachricht via Website', $_POST[$input]);
    }
}


//filter_var($_POST[$input['name']], FILTER_VALIDATE_EMAIL)

?>