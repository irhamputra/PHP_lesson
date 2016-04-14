<?php



 //include "config/config.php";

 //include "func/application.php";

 include "files/thomas/content1.inc.php";
// include "files/thomas/text1.txt";

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

    <link rel="stylesheet" href="css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>


<body>

<?php	

		echo "		
			<div>			
				<p>
					<br />Hausaufgabe vom 12.4. - <b>Dateioperatoren</b>: <!--student(at)sae-->
					<br />
					<br /><b>Ausgabe des Inhaltes der content1.inc.php über <i>include</i>:</b>
					<br />$c1_1
				</p>		
			</div>		
		";	

// gesamten Inhalt auslesen	mit file_get_contents aus Text-Datei
	
		$content1a = file_get_contents('files/thomas/text1.txt');	
		echo " 
		<b>Ausgabe des Inhaltes der text1.txt-Datei über <i>file_get_contents</i>:</b>
					<br />$content1a
		";

// gesamten Inhalt auslesen	mit file_get_contents aus php-Datei
	
		$content1b = file_get_contents('files/thomas/content1.inc.php');	
		echo " 
		<br />
		<br />
		<b>Ausgabe des Inhaltes der content1.inc.php-Datei über <i>file_get_contents</i>:</b>
					<br />$content1b
		";
		
		
//alle Zeilen auslesen mit while

// if(!file_exists("files/thomas/content1.inc.php"))		
	if(!file_exists("files/thomas/text1.txt"))		
		exit("Inhalt konnte nicht gefunden werden");			
		$fop = @fopen("files/thomas/text1.txt","r");		
		if(!$fop)		
		exit("Inhalt konnte nicht geöffnet werden");				
/*		while (!feof($fop, 200)){		
		$zeilen = fgets($fop, 200);		
		echo "Zeilen: $Zeilen<br />";					
				}		
		fclose($fop);
*/
		
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
		<br />
		<br /><b>Ausgabe des Inhaltes der ersten Zeile der text1.txt über <i>fopen & fgets</i>:</b>
		<br /> $zeile1";
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
		<br /><b>Ausgabe des Inhaltes der vierten Zeile der text1.txt über <i>fopen & array</i>:</b>
		<br /> $zeilen[3]";
		fclose($fop);
		
		

		

	

?>
</body>
</html>
