<!-- Prüfung, ob alle Felder ausgefüllt
	 - alle Felder = Pflichtfelder! -
	 wenn Nutzer alles ausgefüllt hat (= keine Fehler), wird E-Mail verschickt -->

<?php include 'lena_18Apr2016_config.php'; ?>

<div class="row">
    <h5>Neu Registrieren</h5>
    <form class="col s12" action="#" method="post">
		<div class="row">
			<?php foreach ($arrRegistration as $key => $input) : ?>
				<?php if ($input['type'] == 'text') : ?>
					<div class="<?php echo $input['class_field'] ?>">
						<input id="<?php echo $input['name'] ?>" type="<?php echo $input['type'] ?>" name="<?php echo $input['name'] ?>" 
						class="<?php echo $input['class_input'] ?>">
						<label for="<?php echo $input['name'] ?>"><?php echo $input['display'] ?></label>
						<?php if (!empty ($arrStatus[$input['name']])) : ?>
							<p class="error"><?php echo $arrStatus[$input['name']] ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<?php foreach ($arrRegistration as $key => $input) : ?>
			<?php if ($input['type'] != 'text' AND $input['type'] != 'submit') : ?>
				<div class="row">
					<div class="<?php echo $input['class_field'] ?>">
						<input id="<?php echo $input['name'] ?>" type="<?php echo $input['type'] ?>" name="<?php echo $input['name'] ?>" 
						class="<?php echo $input['class_input'] ?>">
						<label for="<?php echo $input['name'] ?>"><?php echo $input['display'] ?></label>
						<?php if (!empty ($arrStatus[$input['name']])) : ?>
							<p class="error"><?php echo $arrStatus[$input['name']] ?></p>
						<?php endif; ?>
					</div>
				</div>
			<?php //endif; ?>
			<?php elseif ($input['type'] != 'text' AND $input['type'] == 'submit') : ?>
				<div class="row">
					<div class="<?php echo $input['class_field'] ?>">
						<input id="<?php echo $input['name'] ?>" type="<?php echo $input['type'] ?>" 
						name="<?php echo $input['name'] ?>" class="<?php echo $input['class_input'] ?>" 
						value="<?php echo $input['display'] ?>">
					</div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
    </form>
	<p>&#42; Pflichtfelder</p>
</div>

