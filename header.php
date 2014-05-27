<?php ?>
  <head>
    <meta charset="UTF-8">
	<meta name="keywords" content="cloud backup, online backup" />
	<meta name="description" content="1Backup, smart solution for online backup of your business" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>1Backup | Cloud Backup for Your Business</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-theme.css" media="screen">
    <!--link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen"-->
    <link rel="stylesheet" href="css/main_style.css" media="screen">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  	<script src="js/login.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  </head>
  <body>
	    <div class="full">
	    		<div role="top-bar">
	    			<nav role="top-nav">
	    				<ul>
	    					<li><a href="#">About</a></li>
	    					<li><a href="#">Partner with Us</a></li>
	    					<li><a href="#">Support</a></li>
	    				</ul>
	    			</nav>
	    		</div>
		    <header role="banner">
				<div class="max-width">
					<h1>
						<a href="index.php"><img src="img/logo.png" alt="1Backup logo" title="cloud backup" /></a>
					</h1>
					<nav role="main-nav">
						<ul>
								<li class="dropdown">
										<a data-toggle="dropdown" href="#" class="btn btn-primary">Data Backup <span class=" icon-angle-down"></span></a>
							 			 <ul class="dropdown-menu">
								    		<li><a href="#" >1Backup PC</a></li>
											<li><a href="#">1Backup Server</a></li>
											<li><a href="#">1Backup Space</a></li>
											<li><a href="#">1Backup Server Replay</a></li>
							  			</ul>
								</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" href="#" class="btn btn-primary">Mail Archive <span class=" icon-angle-down"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">1Backup Mail Archive</a></li>
								</ul>
							</li>
							<li><a href="#">Plans & Pricing</a></li>
							<li class="dropdown">
									<a data-toggle="dropdown" href="#" class="btn btn-primary">Resources <span class=" icon-angle-down"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Printscreen</a></li>
										<li><a href="#">Knowledgebase</a></li>
										<li><a href="#">Datasheet</a></li>
									</ul>
							</li>
						</ul>
						<div id="loginContainer">
			                <a href="#" id="loginButton"><span class="icon-user"></span><span>Login</span><em></em></a>
			                <div style="clear:both"></div>
			                <div id="loginBox"> 
			                	<div class="boxTitle">Partner Login</div>              
			                    <form id="loginForm" name="systemLogonForm" method="post" action="http://backup.1backup.it/obs/system/logon.do" target="_blank">
			                        <fieldset id="body">
			                            <fieldset>
			                                <input type="text" name="systemLoginName" id="systemLoginName" placeholder="Enter your User" />
			                            </fieldset>
			                            <fieldset>
			                                <input type="password" name="systemPassword" id="systemPassword" placeholder="Enter your Password" />
			                            </fieldset>
			                            <button type="submit" id="login" value="Log in to your Private Area">Log in to your Private Area</button>
			                        </fieldset>
			                    </form>
			                </div>
			            </div>
					</nav>
				</div>
		    </header>
