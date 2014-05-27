<?php
	$email = mysql_real_escape_string($_POST['email']);
	$fullname = mysql_real_escape_string($_POST['fullName']);

	include 'header.php';
?>

<!--Begin Container -->
	<div class="container">
		<h3>Gentile <?php echo $fullname; ?>, compila il form che segue per completare la tua Richiesta Trial:</h3>
		<h4></h4>
		<!-- Begin Form -->
		<form id="fullTrialForm" name="fullTrialForm" method="post" action="trial-form.php">
			<fieldset>
				<h4>Your Data</h4>
				<input type="text" name="fullName" id="fullName" placeholder="Enter your Full Name" value="<?php echo $fullname; ?>" required />
				<input type="text" name="email" id="email" placeholder="Enter your Email" value="<?php echo $email; ?>" required />
				<input type="text" name="company" id="company" placeholder="Enter your Company Name" required />
				<input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required />
				<input type="text" name="website" id="website" placeholder="Enter your Web Site" />
				<h5>Sei un:</h5>
				<div class="checkbox">  
					<input id="finaluser" type="checkbox" name="finaluser" value="finaluser" />  
					<label for="finaluser" name="finaluser">Cliente Finale</label><br />
					<input id="business" type="checkbox" name="business" value="business" />  
					<label for="business" name="business">Rivenditore / Azienda</label> 
				</div>
			</fieldset>
			
			<fieldset>
			    <h4>Your Trial Request</h4>
			    <h5>You are interested in:</h5>
			    <?php
			    		if (!empty($_POST['dataBackup']) && empty($_POST['mailArchive']))  {
						 	$databackup = $_POST['dataBackup'];
						 	echo '<h6>Data Backup</h6>
								<div class="checkbox">  
								<input id="backupPC" type="checkbox" name="backupPC" value="backupPC" />  
								<label for="backupPC" name="backupPC">1Backup PC</label><br />
								<input id="backupServer" type="checkbox" name="backupServer" value="backupServer" />  
								<label for="backupServer" name="backupServer">1Backup Server</label><br />
								</div>
								<label for="gb" name="gb">Specificare il numero di GB:</label>
								<input type="text" name="gb" />
						 	';
						} elseif (empty($_POST['dataBackup']) && !empty($_POST['mailArchive'])) {
							$mailarchive = $_POST['mailArchive'];
							echo '<h6>Mail Archive</h6>
								<label for="mailuser" name="mailuser">Specificare il numero utenti:</label>
								<input type="text" name="mailuser" />
							';
						} else {
							echo '<h6>Data Backup:</h6>
								<div class="checkbox">  
								<input id="backupPC" type="checkbox" name="backupPC" value="backupPC" />  
								<label for="backupPC" name="backupPC">1Backup PC</label><br />
								<input id="backupServer" type="checkbox" name="backupServer" value="backupServer" />  
								<label for="backupServer" name="backupServer">1Backup Server</label><br />
								</div>
								<label for="gb" name="gb">Specificare il numero di GB:</label>
								<input type="text" name="gb" />
								<h6>Mail Archive:</h6>
								<label for="mailuser" name="mailuser">Specificare il numero utenti:</label>
								<input type="text" name="mailuser" />
								';
						}
			    ?>
			</fieldset>
			<button type="submit" id="submit" value="Log in your Private Area">Request Free Trial</button>
			</form>
		<!-- End Form -->
	</div>
<!--End Container -->

<!--Include Footer-->
<?php 
	include 'footer.php';
