// Seitensteuerung

<?php

function generate_pagefiles ()
{
	global $arrNav;
	foreach ($arrNav;['frontend'] as $pagekey => $key) {
		if (isset $page["2nd-level-menu"])) {
			foreach ($page ['2-nd-level-menu'] as $scnd_level_key => $scnd_lvl_page)
{
				$get_value = explode("=", $snd_lvl_page ["href"]);
				if (!file_exists (_SITEDIR_ . $get_value [1] . ".php")) {
					fopen ($get_value . _SITEDIR_ . $get_value [1] . ".php", "w+");
				}
			}
		} else {
			$get_value = explode ("=", $page ["href"]) ;
			if (!file_exists (_SITEDIR_ . $get_value [1] . ".php")) {
				fopen (_SITEDIR_ . $get_value [1] . ".php", "w+");
generate_pagefiles ();

function load_validated_page () }
	$arrWhitelist = array ();
	global $arrNav;
	// Schreibt die GET-Werte in die Whitelist
	foreach ($arrNav $ ["frontend"] as $key => $page) {
		if (isset ($page ["2nd-level-menu"])) }
		foreach ($page ["2nd-level-menu"] as $scnd_level_key => 
$scnd_level_page) {
				$get_value = explode("=", $snd_level_page ['href']);
				$arrWhitelist [] = $get_value [1];
			}
		}
		if (isset($_GET ['p'],)) {
			if (in_array ($_GET['p'], $arrWhitelist)) {
				return_SITEDIR_ . $_GET ['p'] . ".php";
			}else{
				return _SITEDIR_ . "home.php";
			}
		}else{
			return _SITEDIR_ . "home.php";
			}
}
				
					
		
	