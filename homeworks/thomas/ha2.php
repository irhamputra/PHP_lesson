<?php function ha2(){

?>



<?php
		echo "		
			<div>			
				<p>
				<font color='red'><b>HA-2 vom 12.04.16: PHP - Dateioperatoren</b></font>
				<br />Expermientieren mit fopen, fclose, fwrite, fread, file_get_contents, und file(); alternativ mit readfile();</b>
				</p>		
			</div>		
		";	
		
// Ausgabe  des Inhalts der content1.inc.php über include
		echo "
		<p>
				<b>Ausgabe des Inhaltes der content1.inc.php über <i>include & variable</i></b>
		<br />	$c1_1
				</p>
		";
		
// Ausgabe  des Inhalts der content1.inc.php über readfile
		echo "
		<p>
				<b>Ausgabe des Inhaltes der content1.inc.php über <i>readfile</i></b>
				<br />readfile($c1_1);
		</p>
		";

// gesamten Inhalt auslesen	mit file_get_contents aus php-Datei		
		
				$content1b = $c1_1;
		echo " 
		<p>
		<b>Ausgabe des Inhaltes der content1.inc.php-Datei über <i>file_get_contents</i></b>
					<br />". $content1b ."
					<br/ ><font color='red'>(da bleibt dann aber so einkomisches PHP-Anh&auml;ngsel...)</font>
		</p>			
		";
		
// gesamten Inhalt auslesen	mit file_get_contents aus Text-Datei
	
		$content1a = file_get_contents('files/thomas/text1.txt');	
		echo "
		<p>
		<b>Ausgabe des Inhaltes der text1.txt-Datei über <i>file_get_contents</i></b>
					<br />$content1a
		</p>			
		";
		
//alle Zeilen auslesen mit while


/*	if(!file_exists("files/thomas/content1.inc.php"))		
	$contenttext1 = "files/thomas/text1.txt";
	if(!file_exists("files/thomas/text1.txt"))		
		exit("Inhalt konnte nicht gefunden werden");			
		$fop = @fopen($contenttext1,"r");		
		if(!$fop)		
		exit("Inhalt konnte nicht geöffnet werden");
		while (!feof($fop)){
		$zeilen = fread($fop, filesize($contenttext1));
		echo "Zeilen: $Zeilen<br />";					
				}		
		fclose($fop);

		echo " 
		<p> <!--
		<b>Ausgabe des Inhaltes der content1.inc.php-Datei über <i>fopen & while</i></b>
					<br/ ><font color='red'>(das habe ich  noch nicht hinbekommen)</font>
		-->
		</p>			
		"; */
		

		
// erste Zeile aus Datei auslesen 	

	//	if(!file_exists("files/thomas/content1.inc.php"))		
		if(!file_exists("files/thomas/text1.txt"))	
		exit("Inhalt konnte nicht gefunden werden");
	// $fop = @fopen("files/thomas/content1.inc.php","r");			
		$fop = @fopen("files/thomas/text1.txt","r");		
		if(!$fop)		
		exit("Inhalt konnte nicht geöffnet werden");				
		$zeile1 = fgets($fop,400);		
		echo "	
		<p>
		<b>Ausgabe des Inhaltes der ersten Zeile der text1.txt über <i>fopen & fgets</i></b>
		<br /> $zeile1
		</p>
		";
		fclose($fop);		
		
// vierte Zeile aus Datei ausgeben

	//	if(!file_exists("files/thomas/content1.inc.php"))		
		if(!file_exists("files/thomas/text1.txt"))	
		exit("Inhalt konnte nicht gefunden werden");
	// $fop = @fopen("files/thomas/content1.inc.php","r");			
		$fop = @fopen("files/thomas/text1.txt","r");		
		if(!$fop)		
		exit("Inhalt konnte nicht geöffnet werden");				
	//	$zeile1 = fgets($fop,400);	
		$zeilen = file ('files/thomas/text1.txt');
		echo "			
		<p>
		<b>Ausgabe des Inhaltes der vierten Zeile der text1.txt über <i>fopen & array</i></b>
		<br /> $zeilen[3]
		</p>
		";
		fclose($fop);
		
// Download über readfile

/*		$file = 'files/thomas/tps_bild_1.jpg';

		if (file_exists($file)) {
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename($file).'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize($file));
			readfile($file);
			exit;
}
		
*/			

?>
	<!-- Ende HA vom 12.4.16-->
	
<?php }
?>