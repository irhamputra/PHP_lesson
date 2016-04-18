
 	<hr>
<!--Hausaufgaben-->	
		
		<!-- Formular 1 -->
<div>
			<div>			
				<p>
				<font color='red'><b>HA-08-01-2016: HTML - Formulare</b></font>
				<br />Expermieren mit Formualren</b> <!--student(at)sae-->
				</p>		
			</div>		
	
			<form action="" method="post">
			
			<!-- Fieldset 1 -->

			<fieldset id="f1"><legend class="legend1">Formular 1</legend>
			<div id="field1">
				<p>
					<label for="vorname" title="Na? - Du wirst doch noch wissen, wie Dein Vorname ist, oder?">Vorname:</label>
					<br />
					<input type="text" size="40" name="vorname" id="vorname">
				</p>
				<p>
					<label for="zuname" title="Na? - Du wirst doch noch wissen, wie Dein Nachname ist, oder?">Zuname:</label>
					<br />
					<input type="text" size="40" name="zuname" id="zuname">
				</p>
				<br />
				<p>
					<label >Auswahl 1:
					<br />
					<input type="text" size="40" name="auswahl1">
					</label>
				</p>
				<p>
					<label >Auswahl 2:
					<br />
					<input type="text" size="40" name="auswahl2">
					</label>
				</p>
								<p>
					<label >Auswahl 3:
					<br />
					<input type="text" size="40" name="auswahl3">
					</label>
				</p>
				<p>
					<input class="input1" type="submit" value="absenden" title="Wehe - Du drückst hier drauf. Wehe!!!">
				</p>
				</div>
			</fieldset>
		</form>
		<!-- Ende Formular 1 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
			<!-- Formular 2 -->
		<form action="" method="post">
			
	
			<fieldset id="f2"><legend class="legend2">Formular 2</legend>
				<div id="field2">
				<p>
					<label >Vorname:
					<br />
					<input type="text" size="30" name="vorname" maxlength:="30" value="TPS">
					</label>
				</p>
				<p>
					<label >Nachname:
					<br />
					<input type="text" size="30" name="zuname" maxlength:="40" value="BibeR">
					</label>
				</p>
				<p>
					<label >Kennwort:
					<br />
					
					<input type="password" size="12" name="kennwort" maxlength:="12" value="BibeR">
					</label>
				</p>
				<p>
					<input class="input1"; type="submit" value="absenden" title="Wehe - Du drückst hier drauf. Wehe!!!">
				</p>
			</div>
			</fieldset>
		</form>
		<!-- Ende Formular 2 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
			<!-- Formular 3 -->
		<form action="" method="post">
			
			<fieldset><legend>Formular 3</legend>
				<p>
					<label >Wie findest Du diese Hausaufgabe?
					<br />
						<textarea name="feedback" cols="30" rows="15" maxlength:"500" wrap="soft" style="width: 600 px; height: 100px; ">
						Schreib hier Dein Feedback rein...
						</textarea>
					</label>
				</p>
				<p>
					<input class="input2"; type="submit" value="absenden" title="Wehe - Du drückst hier drauf. Wehe!!!">
				</p>
			</fieldset>
		</form>
		<!-- Ende Formular 3 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
		<!-- Formular 4 -->
		<form action="" method="post">
			
			<fieldset><legend>Formular 4</legend>
				<p>
					<!-- Label 1 -->
					<label >Formular-Struktur
					<br />
						<select name="struktur" size="3" style="width: 400 px;">
							<option value="label1_1" selected>explizit</option>
							<option value="label1_2" selected>implizit</option>				
						</select>
					</label>
				</p>
				<p>
					<!-- Label 2 -->
					<label >Formular-Input
					<br />
					(Mehrfachauswahl möglich)
					<br />
						<select multiple name="options[]" size="3" style="width: 400 px;">
							<option value="label2_1" selected>einzeilig</option>
							<option value="label2_2" selected>mehrzeilig</option>					
						</select>
					</label>
				</p>	
				<p>	
					<!-- Label 3 -->
					<label >Formular-Auswahl
					<br />
						<select name="auswahl" size="16" style="width: 400 px;">
							<optgroup label="Optionen 1">
								<option value="label3_1_1" selected>Combobox</option>
								<option value="label3_1_2" selected>Eingabefelder</option>	
								<option value="label3_1_3" selected>Auswahlfelder</option>	
							</optgroup>
							
							<optgroup label="Optionen 2">
								<option value="label3_2_1" selected>einzellig</option>
								<option value="label3_2_2" selected>mehrzellig</option>	
								<option value="label3_2_3" selected>implizit</option>	
								<option value="label3_2_4" selected>explizit</option>	
							</optgroup>
							<optgroup label="Optionen 3">
								<option value="label3_3_1" selected>Checkboxen</option>
								<option value="label3_3_2" selected>Radiobuttons</option>
								<option value="label3_3_2" selected>Schaltflächen</option>
								<option value="label3_3_2" selected>versteckte Felder</option>							
							</optgroup>
						</select>
					</label>
				</p>
				<p>
					<input type="submit" value="absenden" title="Wehe - Du drückst hier drauf. Wehe!!!">
				</p>
			</fieldset>
		</form>
		<!-- Ende Formular 4 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
				<!-- Formular 5 -->
		<form action="" method="post">
			
			<fieldset><legend>Formular 5</legend>
				<p>Combobox:
					<br />
						<input type="text" name="combobox" list="comboboxlist">
							<datalist id="comboboxlist">
								<option value="freie Eingabe">
								<option value="Auswahl 1">
								<option value="Auswahl 2">
								<option value="Auswahl 3">
							</datalist>
				</p>
			</fieldset>
		</form>
		<!-- Ende Formular 5 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
				<!-- Formular 6 -->
		<form action="" method="post">
			
			<fieldset><legend>Formular 6</legend>
				<p>Radiobutton:
					<br />
						<input type="radio" name="radio" value="radio_wert1" checked>Radio-Auswahl 1
				<br />	<input type="radio" name="radio" value="radio_wert2">Radio-Auswahl 2
				<br />	<input type="radio" name="radio" value="radio_wert3">Radio-Auswahl 3
				<br />	<input type="radio" name="radio" value="radio_wert4">Radio-Auswahl 4
				<br />	<input type="radio" name="radio" value="radio_wert5">Radio-Auswahl 5
				</p>
				<p>Checkbox:
					<br />
						<input type="checkbox" name="checkbox[]" value="checkbox_wert1" checked>Checkbox-Auswahl 1
				<br />	<input type="checkbox" name="checkbox[]" value="checkbox_wert2">Checkbox-Auswahl 2
				<br />	<input type="checkbox" name="checkbox[]" value="checkbox_wert2">Checkbox-Auswahl 3
				<br />	<input type="checkbox" name="checkbox[]" value="checkbox_wert2">Checkbox-Auswahl 4
				<br />	<input type="checkbox" name="checkbox[]" value="checkbox_wert2">Checkbox-Auswahl 5
				</p>
				<p>
						<input type="submit" value="absenden">
				</p>
			</fieldset>
		</form>
		<!-- Ende Formular 6 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
				<!-- Formular 7 -->
		<form action="" method="post" enctype="multipart/formdata">
			
			<fieldset><legend>Formular 7</legend>
				<p>
				<label >Formular Dateiupload
					<br />				<!-- wenn mehrere Dateiuploads gleichzeitig: multiple - sonst weglassen-->
						<input name="pics[]" type="file" multiple accept="image/*">
					</label>
				</p>
				<p>
						<input type="submit" value="hochladen">
				</p>
			</fieldset>
		</form>
		<!-- Ende Formular 7 -->
	<br />
	<hr color="#FF0000" size="1">
	<br />
				<!-- Formular 8 -->
		<form action="" method="post">
			
			<fieldset><legend>Formular 8</legend>
				<!-- Für Java später<p>
				<label >Schaltfläche 1
					<br />				
						<input type="button" value="<" onclick="pkt_minus()">
						<input type="text" ide="pkt" name="punkte" size="1" style="text-align: center;" value="5">
						<input type="button" value=">" onclick="pkt_plus()">		
					</label>
				</p> 
					<br />		
						<button type="button" onclick="next_willi"() id="willi_button" value="Willi_1" style="width: 120px; padding: 3px; text-align: center;">
								<img id="willi_img" src="https://cdn.dein.training/dao/m/filer_public_thumbnails/filer_public/3e/4f/3e4f71af-5b15-4a11-8299-11b13ce95292/silvester_willi_small.jpg__48x48_q85_crop_subsampling-2_upscale.jpg"
								<span id="willi_name">Willi 1</span>
						</button>
	
					</label>
				</p> -->
					<p>
				<label >grafische Schaltfläche
					<br />		
						<input type="image" id="willi_button" value="" style="width: 40px; padding: 3px; text-align: center;">
								<img id="willi_img" src="https://cdn.dein.training/dao/m/filer_public_thumbnails/filer_public/3e/4f/3e4f71af-5b15-4a11-8299-11b13ce95292/silvester_willi_small.jpg__48x48_q85_crop_subsampling-2_upscale.jpg">
				</p>
				<p>
						<input type="submit" value="OK" style="width: 40px">
						<input type="reset" value="Abrechen" style="width: 80px">
				</p>
				</label>
			</fieldset>
		</form>
		<!-- Ende Formular 8 -->
		
<!-- Ende HA vom 25.1.16 -->
<br />
<br />
<hr color="#000000" size="5">

<!-- Beginn HA vom 8.1. 16-->
	<table border="0" cellpadding="1" cellspacing="1" style="width: 100%">
	<thead>
		<tr>
			<th scope="col" style="text-align: left; width: 30%"><font color="orange"><h5 title="Hi Marten. Hier ist sie nun meine HA: HTML vom 25.1.16" >Hausaufgabe: HTML</h5></font></a></th>
			<th scope="col" style="text-align: left;">vom 8.1.16</th>
		</tr>
	</thead>
	</table>
		<p>Drei HTML-Elemente? Das ist <font color="red">(noch)</font> nicht so schwer.</p>
		
		<p>
			<ul>
				<li><i>leicht</i></li><br />
				<li><b>leichter</b></li></br />
				<li><i><strong>am leichtesten</strong></i></li><br />
			</ul>
		</p>
		<p title="Warum stellen sich BiBeR immer dümmer an, als sie sind? .... (Aus Mitleid mit dem Dozenten! Hihi)">
		Oder:
		</p>
		<p>
			<ol>
				<li><i>schwer</i></li><br />
				<li><b>schwerer</b></li><br />
				<li><i><strong>am schwersten</strong></i></li><br />
			</ol>
		</p>
		<hr>
		<p>
		<a href="https://vimeo.com/96102662" target="_blank" title="Link zum SAE-Video"><h5>Und hier noch ein Link zum Video Kurs</h5></a>
		</p>
	
</div>	
	<!-- Ende HA vom 8.1. 16-->
	<br /><a href="">Nach oben</a> 

		<hr>