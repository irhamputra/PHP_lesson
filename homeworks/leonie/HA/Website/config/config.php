<?php
define ("_BASE_", $_SERVER ['PHP_SELF']);
define (_"SITEDIR_", "sites/frontend/");

//Navigationsarray
$arrNav = array(
	"frontend" => array (
		0 => array (
			"href" => "_BASE_". "?p=home",
			"title" => "Home",
			"classes" => ""
			),
			
			1 => array(
			"href" => "#",
			"title" => "Unternehmen",
			"classes" => "submenu",
			"2-nd-level-menu" => array (
				0 => array
				"href" => "_BASE_". "?p=about",
				"title" => "About",
				"classes" => "submenu"
				),
				1 => array(
				"href" => "_BASE_". "?p=jobs",
				"title" => "Jobs"
				"classes" => ""
				),
			)
		),
		13 => array (
		"href" => "_BASE_". "?p=upload",
		"title" => "Upload",
		"classes" => ""
		),
		5 => array(
		"href" => "_BASE_". "?p=shop",
		"title" => "Shop",
		"classes" => ""
		
		),
		12 => array(
		"href" => "_BASE_". "?p=cart",
		"title" => "Warenkorb",
		"classes" => ""
		
		),
		6 => array(
		"href" => "_Base_". "?p=questbook",
		"title" => "Gästebuch",
		"classes" => ""
		
		),
		8 => array(
		"href" => "_BASE_". "?p=chat",
		"title" => "Chat",
		"classes" => "",
		
		),
		2 => array(
		"href" => "_BASE_". "?p=contact",
		"title" => "Kontakt",
		"classes" => ""
		
		),
		3 => array(
		"href" => "_BASE_". "?p=toc",
		"title" => "AGB",
		"classes" => ""
		
		),
		4 => array(
		"href" => "_BASE_". "?p=imprint",
		"title" => "Impressum"
		"classes" => ""
		
		),
		7 => array(
		"href" => "_BASE_". "?p=login",
		"title" => "Login"
		"classes" => "",
		
		)
	),
	"backend" => array ()
);
				
