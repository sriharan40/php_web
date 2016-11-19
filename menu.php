<style>
/**
 * Skyrim-inspired Menu
 */

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

html {
	
	min-height: 100%;
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
	color: #FFF;
}

body, html {
	height: 100%;
	margin: 0;
	padding: 0;
}

a {
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
}

	a:hover, li:hover > a {
		color: #FFF;
	}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

li {
	margin: 0;
	padding: 0;
}

#menu {
	border-left: 1px solid #FFF;
	border-right: 1px solid #FFF;
	background: rgba(0, 0, 0, 0.5);
	float: left;
	font-size: 1.5em;
	min-height: 100%;
	margin-left: 1em;
}

#menu li {
	position: relative;
	z-index: 1;
}

#menu li a {
	display: block;
	padding: 0.5em 1em;
	white-space: nowrap;
}

	#menu li ul {
		position: absolute;
		overflow: hidden;
		display: none;
		left: 100%;
		top: 0.5em;
		float: none;
		background-image: -moz-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
		background-image: -webkit-radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
		background-image: radial-gradient(0 50%, ellipse  farthest-side, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.5) 33%, rgba(0,0,0,0) 100%);
	}
	
	#menu li:hover ul {
		display: block;
	}
	
	#menu li ul a {
		position: relative;
		font-size: 0.8em;
	}
	
	#menu li ul a:hover:before {
		content: "";
		display: block;
		width: 1em;
		height: 1em;
		background: rgba(0,0,0,0.75);
		border: 1px solid #FFF;
		position: absolute;
		top: 0.5em;
		left: -0.75em;
		-moz-transform: rotate(45deg);
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
	}
body {
	margin:0px auto;
	padding:0;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	color:#333;
	background:#fff url('images/body-bg.jpg') repeat-x;
}
* {
	margin:0;
	padding:0;
}


/** element defaults **/
table {
	width:100%;
	font-family:Arial, Helvetica, sans-serif;
	text-align:left;
}
th, td {
	padding:5px 10px;
}
th {
	color:#fff;
	border-top:3px solid #082659;
	background-color:#0C3A87;
}
td {
	border-bottom:1px solid #f4f4f4;
}
code, blockquote {
	display:block;
	border-left:5px solid #ddd;
	padding:10px;
	margin-bottom:20px;
}
blockquote p {
	font-style:italic;
	font-family:Georgia, "Times New Roman", Times, serif;
	margin:0;
	height: 1%;
}
p {
	line-height:1.9em;
	margin-bottom:20px;
}
a {
	color:#0D3C84;
}
a:hover {
	color:#0C3A85;
}
a:focus {
	outline:none;
}
fieldset {
	display:block;
	border:none;
	border-top:1px solid #e0e0e0;
}
fieldset legend {
	font-weight:bold;
	font-size:13px;
	padding-right:10px;
	color:#222;
}
fieldset form {
	padding-top:15px;
}
fieldset p label {
	float:left;
	width:150px;
	font-family:Arial, Helvetica, sans-serif;
}
fieldset form input, fieldset form select, fieldset form textarea {
	padding:5px;
	color:#333333;
	font-size:13px;
	font-family:Arial, Helvetica, sans-serif;
	border:1px solid #ddd;
}
fieldset form input.formbutton {
	margin-left:150px;
	background:#0C3A87;
	border:none;
	border-bottom:3px solid #082659;
	color:#ffffff;
	font-weight:bold;
	padding:5px 10px;
	font-size:13px;
}
h1 {
	font-size:45px;
	font-family:Arial, Helvetica, sans-serif;
}
h2 {
	color:#061C41;
	font-family:Arial,Helvetica,sans-serif;
	font-size:30px;
	font-weight:bold;
	letter-spacing:-2px;
	padding:0 0 5px;
	margin:0;
}
h3 {
	font-family:Arial,Helvetica,sans-serif;
	color:#0D357B;
	font-size:20px;
	padding-bottom:10px;
}
h4 {
	font-family:Arial,Helvetica,sans-serif;
	padding-bottom:10px;
	font-size:15px;
	color:#0C3A85;
}
h5 {
	padding-bottom:10px;
	font-size:13px;
	color:#666666;
}
ul, ol {
	margin:0 0 35px 35px;
}
li {
	padding-bottom:5px;
}


/** wrapper **/
div#wrapper {
	width:920px;
	margin:0px auto;
	padding:0;
}


/** sitename **/
div#sitename h1 {
	font-size:48px;
	letter-spacing:-5px;
	margin:0;
	height:82px;
	padding:18px 0 0;
}
div#sitename h1 a,
div#sitename h1 a:hover {
	color:#fff;
	font-weight:normal;
	text-decoration:none;
}

/** header **/
div#header {
	padding:50px 0 40px;
	margin:0 auto;
	height:111px;
	background:transparent url('images/header-bg.jpg') no-repeat;
}
div#header h2 {
	color:#ffffff;
	padding-bottom:0;
	font-weight:normal;
	font-family:'Lucida Grande','Lucida Sans Unicode',Geneva,Verdana,Sans-Serif;
	font-size:32px;
	letter-spacing:0;
}
div#header div.tagline {
	color:#C2D7F9;
	font-size:14px;
	padding-bottom:10px;
	font-family:Arial,Helvetica,sans-serif;
}
div#header div.tagline a {
	color:#ffffff;
}
</style>
<!-- CHANGE for site header and code -->
		<ul id="menu">
		<li>
		<a href="#">Bot Analytics</a>
		<ul>
			<li>
				<li><a href="https://www.dashbot.io/login">Dashbot Analytics</a>         
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Training Bot</a>
		<ul>
			<li>
				<a href="https://console.api.ai/api-client/#/login">API.AI</a>
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Business Cases</a>
		<ul>
			 <li><a href="index.php">Top Selling Offers</a></li>
			 <li><a href="fb_campaign.php">Broadcast to FB users</a></li>
		</ul>
	<li>
	<li>
		<a href="#">Controls</a>
		<ul>
			<li>
				<a href="logout.php">Sign Out</a>
			</li>
			
		</ul>
	<li>
</ul>
		<!--<div id="body" class="clear">
			<div id="sidebar" class="column-left">
			<ul>
                	<li>
			<h4>Bot Performance and Analytics</h4>
                        <ul class="blocklist">
                            <li><a href="https://www.dashbot.io/login">Dashbot Analytics</a></li>                            
                        </ul>
			</li>
			<li>
			<h4>Bot Training</h4>
                        <ul class="blocklist">
                            <li><a href="https://console.api.ai/api-client/#/login">API.AI</a></li>
                           </ul>
			</li>
			<li>
			<h4>Business Usecases</h4>
                        <ul class="blocklist">
                            <li><a href="index.php">Top Selling Offers</a></li>
			    <li><a href="fb_campaign.php">Broadcast to FB users</a></li>
                           </ul>
			</li>
			<li>
			<h4>Session Controls</h4>
                        <ul class="blocklist">
                            <li><a href="logout.php">Sign Out</a></li>
			                    </ul>
			</li>
			</ul>
			</div>
	

<!-- CHANGE ENDS here -->

