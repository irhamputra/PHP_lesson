<html>
	<head>
		<title>Test</title>
	</head>
<body>
		<b>
	<?php
		echo "Hausaufgaben";
	?>
		</b>
	
	<?php
	

		// PFad von FOPEN braucht keine FTP daten sondern nur relative pfadangabe
		$handle = fopen("Dokument1.txt", "r");

		if ($handle)
		{ print "Gefunden!";}
		else
		{print "Nicht Gefunden!";}
	?>


	<p><b>Hier sollte die Ausgabe vom Dokument 1 stehen: 
	</b><p>

	<?php
		$Dokument1 = file_get_contents('Dokument1.txt');
		echo $Dokument1;

	?>


	<p><b> Hier sind nur die ersten beiden Buchstaben des Dokuments: 
	</b><p>

	<?php

		$dateihandle = fopen("Dokument1.txt","r");
		$daten = fread($dateihandle, 2);
		echo $daten;

	?>









</body>
</html>

