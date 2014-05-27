<!doctype html>
<html lang="en-us">
<?php
	include 'header.php';
?>
<!-- INCLUDE JUMBOTRON -->
<div class="jumbotron_">
  	<div class="main">
	  	<div class="mainSlide">
	  		<h3>Serenity. Safety. Savings</h3>
	  		<h1>Your precious resources are now in safe</h1>
	  		<h2>Cloud Data and Email Backup for your Business and your Private Life.</h2>
	  		<a class="slide-btn"><span>For Reseller <span class=" icon-right-open"></span></span></a>
	  		<a class="slide-btn"><span>For Business <span class=" icon-right-open"></span></span></a>
	  	</div>

	  	<!-- Trial Box -->
	  	<div class="trialBox">
	  		<form id="trialForm" name="trialForm" method="post" action="trial-form.php">
				<h3>Try 1Backup for 15 days</h3>
				<h4>No credit card required</h4>
				<fieldset>
			    	<input type="text" name="email" id="email" placeholder="Enter your Email" required/>
			    </fieldset>
			    <fieldset>
			        <input type="text" name="fullName" id="fullName" placeholder="Enter your Full Name" required />
			    </fieldset>
			    <h5>I am interested in:</h5>
			    <div class="checkbox">  
					<input id="dataBackup" type="checkbox" name="dataBackup" value="dataBackup">  
					<label for="dataBackup" name="dataBackup">Data Backup</label>
					<input id="mailArchive" type="checkbox" name="mailArchive" value="mailArchive">  
					<label for="mailArchive" name="mailArchive">Mail Archive</label> 
				</div> 
			    <button type="submit" id="login" value="Log in your Private Area">Request Free Trial</button>
			</form>
	  	</div>
	</div>
</div>
<!-- END JUMBOTRON -->
<div class="container">
	<div class="row" id="supply">
		<h2 class="main_h2">Choose Your Backup Plan</h2>
		
		<!-- Data Backup -->
		<div class="col-md-6 col-sm-6">
      		<div class="planBox" id="backup">
      			<h3><span class="icon-upload-cloud"></span> Cloud Backup</h3>
      			<h4>Metti al sicuro i tuoi dati</h4>
      			<p><span class="icon-down-open" id="closeBackup"></span></p>
      		</div>
      		<div class="planBox" id="allBackup" style="display:none;">
      			<p>Backup Remoto Pay per Use senza costi di setup. <br />Sicuro, Automatico, Scalabile, Flessibile, Economico
Privacy garantita, possibilità di recuperare i dati in qualsiasi momento anche con un Browser.</p>
      			<h3><span class="icon-cancel-circled" id="closeBackup"></span></h3>
      		</div>
      	</div>

		<!-- Mail Archive -->
      	<div class="col-md-6 col-sm-6">
      		<div class="planBox" id="archive">
      			<h3><span class="icon-mail"></span> Mail Archive</h3>
      			<h4>Metti al sicuro la tua posta elettronica</h4>
      			<p><span class="icon-down-open"></span></p>
      		</div>
      		<div class="planBox" id="allArchive" style="display:none;">
      			<p>Archiviazione Remota della posta elettronica Pay per Use senza costi di setup, Sicuro, Automatico, Scalabile, Flessibile, Economico.
Conforme a tutte le normative vigenti, integrato con MS Outlook, accessibile via web, ripristino email facile.</p>
      			<h3><span class="icon-cancel-circled" id="closeArchive"></span></h3>
      		</div>
      	</div>

	</div>
	
	<div class="row" id="benefit">
			<h2 class="main_h2">Why Backup?</h2>
			<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
				<h3><!--span class="icon-download-cloud-1"></span-->Sicurezza</h3>
				<p>I tuoi dati, le tue email e i tuoi server sono sempre al sicuro, al riparo da danni accidentali o dolenti.</p>
			</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
				<h3><!-- <span class="icon-docs"></span> -->Convenienza</h3>
				<p>Costi di setup e infrastrutturali azzerati. Si paga un canone per quello che si usa e l'ammontare del servizio è completamente
detraibile fiscalmente.</p>
			</div>
				<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
				<h3><!-- <span class="icon-laptop"></span> -->Scalabilità</h3>
				<p>Puoi aumentare le risorse necessarie quando il tuo business cresce senza dover fare investimenti, ma pagando solo la differenza per quello che usi.</p>
			</div>
	</div>

</div>
<!--End First Container-->

<div class="promo">
	<div class="wrapper">
		<div>
		<h3>15-days free trial on all 1Backup Plans</h3>
		<p>No risk, no obligations and no credit card required. You will pay only if satisfied.</p>
		</div>
		<a href="#">See Plans and Pricing<span class=" icon-right-open"></span></a>
	</div>
</div>
<!-- End Promo-->

<div class="container">
	
	<!--icon scheme-->
	<div class="row" id="bigico">
		<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
			<h3><span class="icon-calendar"></span></h3>
			<p>Schedule your data backup and mail archive</p>
		</div>
		<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
			<h3><span class="icon-download-cloud-1"></span></h3>
			<p>Save your precious resources on the cloud</p>
		</div>
		<div class="col-md-4 col-lg-4 col-xs-12 col-sm-4">
			<h3><span class="icon-ok"></span></h3>
			<p>You've done!</p>
		</div>
	</div>

	<!--FAQ-->
	<div class="row" id="faq">
		<h2 class="main_h2">FAQ</h2>
		<!-- accordion left-->
		<div id="accordion">
				<h5>C'è un costo di attivazione / setup?<span class="icon-minus-circled"></span></h5>
				<div style="display:block;">
					<p>Non ci sono costi di setup, costi di cancellazione o altri costi nascosti.</p>
				</div>
				<h5>Serve una linea internet veloce?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>No. Salvo alcune eccezioni, la quantità di dati prodotta giornalmente da una società non supera 1GB di dati al giorno. Mediamente si parla di meno di 100MB di dati al giorno.
Una normale linea ADSL è in grado di fare il backup remoto.</p>
				</div>
				<h5>Come si fa il primo backup?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Il primo backup è sicuramente quello che richiede più tempo. Ci sono diverse possibilità per gestire al meglio il primo backup remoto.
Utilizzando il nostro agente di backup, si fa un backup su un disco esterno in locale presso la vostra azienda e poi ci fate recapitare il supporto con il backup effettuato (i dati sono criptati e compressi quindi non sono leggibili se non dal software di backup e conoscendo la password di decriptazione).
Oppure gestiamo il primo backup in maniera incrementale, cioè facendo backup più piccoli partendo dai dati più importanti.</p>
				</div>
				<h5>Quanto costa il backup remoto?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Il costo è determinato essenzialmente dalla quantità di spazio di cui si ha bisogno per salvare i propri dati.
Si parte da 5GB e si può arrivare a uno o più TeraByte. Il costo a GB scende, man mano che si sale di fascia di spazio disco / spazio remoto di backup.</p>
				</div>
				<h5>Cosa serve per fare il Backup remoto?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Dopo aver sottoscritto il proprio abbonamento, si riceveranno le indicazioni utili a scaricare un software da installare sulla macchina / server del quale si vogliono salvare i dati. Questo software è un Agente di Backup che va semplicemente configurato con 3 parametri: indirizzo del server di Backup, il nome utente e la password, tutte informazioni che vi verranno comunicate in seguito al vostro ordine.</p>
				</div>
				<h5>Quanto spazio mi occorre per fare il backup di 10GB?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Il sistema di backup esegue una compressione dei dati. Ciò comporta un risparmio in termini di spazio occupato sul server di backup remoto. La percentuale di compressione dipende da tantissimi fattori, legati essenzialmente al tipo di file di cui si esegue il backup. Se si devono salvare 10GB di dati il consiglio è di prendere un piano che sia il 50% più grande, per via dello spazio occupato dalla Retention del backup.</p>
				</div>
				<h5>Che differenza c'è tra avere un archivio della posta in PST e il servizio Mail Archive?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Un file PST collegato al proprio Microsoft Outlook non ci mette al riparo dal punto di vista delle normative vigenti, non ci garantisce che le email in esso contenute non possano essere cancellate e/o alterate.
In buona sostanza se non si ha l'obbligo di dover mantenere un archivio intangibile delle email, è sufficiente avere un file PST. Nelle altre circostanze, non si può fare a meno di avere un sistema di archiviazione della posta certificato che rispetti determinati criteri / normative</p>
				</div>
			</div>
			<!-- accordion right-->
			<div id="accordion_r">
				<h5>Bisogna avere un proprio software di Backup?<span class="icon-minus-circled"></span></h5>
				<div style="display:block;">
					<p>No. Il software per fare il backup lo forniamo noi.</p>
				</div>
				<h5>Perchè dovrei fare l'archiviazione remota delle email?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>I vantaggi dell'archiviazione remota della posta elettronica sono molteplici ma ce ne sono alcuni che sono molto importanti.
Dal punto di vista tecnico archiviare della posta elettronica significa alleggerire il server della propria organizzazione e rendere quindi più agile e veloce il server, così come il client di posta.
Argomento invece molto più importante è quello relativo alla conservazione di informazioni / comunciazioni quali quelle che ci si scambia con le email tutti i giorni, che possono essere cruciali in caso sia necessario ricorrere davanti ad un giudice.
Una variegata tipologia di attività economiche è obbligata ad avere un archivio sicuro della posta elettronica.
Un dipendente malizioso potrebbe cancellare solo alcune email importanti e in queste evenienze anche il supporto IT potrebbe non essere in grado di recuperare le email cancellate perchè non farebbe in tempo ad accorgersene.</p>
				</div>
				<h5>Come accedo alla posta archiviata?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Il nostro sistema di archiviazione prevede diversi modi per accedere al proprio archivio; l'integrazione con Microsoft Outlook prevede un apposito plug in. E' comunque possibile accedere anche via web da un qualsiasi browser.
Il ripristino delle email è un'operazione per la quale basta un click.</p>
				</div>
				<h5>Una volta archiviata la posta si può cancellare?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Si e No. Dipende da come decidete di assegnare i permessi agli utenti. E' possibile fare in modo che per l'utente sia sempre disponibile l'archivio di posta, ma che non possa cancellare nessuna email archiviata.</p>
				</div>
				<h5>C'è un sistema per aggiungere le caselle di posta di cui si vuole fare l'archiviazione delle email?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Si. C'è un apposito pannello di gestione amministrativo che funziona via web. Da questo pannello si possono creare gli utenti/caselle di archiviazione e si possono configurare tutti i parametri utili ad un corretto funzionamento.</p>
				</div>
				<h5>Si possono effettuare le ricerche nella posta archiviata?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Certo. Sono previsti diversi metodi di ricerca al pari di quanto è possibile fare con Microsoft Outlook. La ricerca si può fare dal plug in di integrazione con Microsoft Outlook o dall'interfaccia web.</p>
				</div>
				<h5>Cos'è la retention del backup?<span class="icon-plus-circled"></span></h5>
				<div>
					<p>Quando si schedulano / pianificano dei salvataggi, si può decidere di quanti giorni, settimane o mesi si vuole tenere una copia di Backup.
Mettiamo che ogni giorno venga fatto il backup remoto di un file excel molto importante che contiene dati in continuo aggiornamento. Proviamo a pensare che dopo dei cambiamenti il file excel ci sembri errato, con numeri che "non quadrano".
In una circostanza del genere dovremmo andare a ritroso e verificare le versioni precedenti del file per vedere da quando ha incominciato a non essere più corretto.
Una retention di 7 giorni ci consente in queste situazioni di tornare indietro fino a 7 giorni dalla data attuale e quindi di ripristinare 7 diverse versioni dello stesso file.</p>
				</div>
			</div>
				<!--h5><span class="icon-minus-circled"></span>Is this the question?</h5>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, quisquam, labore mollitia quis distinctio veritatis sint fugiat aliquam architecto doloremque exercitationem quas magnam eaque impedit autem commodi ipsum consequuntur laboriosam.</p>
				</div>
				<h5><span class="icon-plus-circled"></span>Is this the question?</h5>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quaerat itaque reprehenderit nobis veritatis voluptatibus mollitia eum! Magni perspiciatis odio cumque minima debitis vel voluptates corrupti provident. Eius, hic, reprehenderit!</p>
				</div>
				<h5><span class="icon-plus-circled"></span>Is this the question?</h5>
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, vel rerum nobis assumenda ipsam. Nam, delectus, tenetur adipisci odit quod ea voluptatibus vero molestiae sit magni earum eligendi ut excepturi.</p>
				</div-->
		</div>
		<!--div class="row" id="logo">
			<h2 class="main_h2">1Backup is successfully used by</h2>
	</div-->
	<!--End logo-->
	</div>
</div>
<?php
	include 'footer.php';
?>