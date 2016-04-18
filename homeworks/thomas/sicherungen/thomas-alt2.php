<?php



 //include "config/config.php";

 //include "func/application.php";

 include "files/thomas/content1.inc.php";
// include "files/thomas/text1.txt";

// variable für seperator "nach oben" =no
	$no="
		<br /><a href=''>Nach oben</a>
		<hr>
		";


?>


<div>
<table border="0" cellpadding="1" cellspacing="1" style="width: 100%">
	<thead>
		<tr>
			<th scope="col" style="text-align: left; width: 45%"><a href="#ha">Hausaufgaben</a></th>
<!--			<th scope="col" style="text-align: left;"><a href="#sp">Spezialthemen</a></th> -->
		</tr>
	</thead>
	<tbody>	
		<tr>
			<td>
			<a href="#ha-1" title="Expermientieren mit Formulalen">HA-1: HTML - Formulare</a>
			<br /><a href="#ha-2" title="Expermientiert mit fopen, fclose, fwrite, fread, file_get_contents, und file(); alternativ mit readfile();">HA-2: PHP - Dateioperatoren</a>
			<br /><a href="#ha-3" title="Registrierungsformular">HA-3: PHP - Registrierung</a>
			</td> 
			</tr>


</table>




</div>
		<div>
	<hr>
<img 	src="https://cdn.dein.training/dt/005-dao/bilder/dt-willis/dein.TRAINING_reisefreies_trainieren_li.gif" 
		width="50%" 
		title="Mit Marten gehts bald ab in den Garten">
</img>


	<hr>
	</div>
<?php
			echo "	
			<div>			
				<p>
				<font color='red'><b>HA-14-04-16: PHP - Registrierung</b></font>
				<br />Expermientieren mit dem Registrierungsformular</b>
				</p>		
			</div>		
		";	
		 include "homeworks/thomas/ha1.php";
			echo $no;
		 

?>
<!--	<br /><a href="">Nach oben</a> 

		<hr> -->
	<p  id="ha-2">
<?php
		 include "homeworks/thomas/ha2.php";

?>
	<br /><a href="">Nach oben</a> 

		<hr>

	<p  id="ha-3">
<?php
			echo "		
			<div>			
				<p>
				<font color='red'><b>HA-14-04-16: PHP - Registrierung</b></font>
				<br />Expermientieren mit dem Registrierungsformular</b>
				</p>		
			</div>		
		";	

  include "files/thomas/tpsregister.php";


?>
	
	<br /><a href="">Nach oben</a> 
	</p>
	<p>
	<br />
	</p>

		<p  id="sp-1" id="sp">
	<br /><a href="">Nach oben</a>
	</p>

<!--	
	<hr>
<!--Spezielles-->	
<!--	<font color="red"><h5>Spezialthemen</h5></font>
	<p><b>S1: Spezialthema 1</b>
	<br />Es gibt noch kein Spezialthema
	</p>
-->	
<!--	<hr>
		<p  id="sp-2">
	<br /><a href="">Nach oben</a> 
	</p>
-->	
<footer title="Copyright"><address>&copy;&nbsp;Peter Schlau, 2016.schlau(at)gmail.com</address><footer/> 
