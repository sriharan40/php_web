<style>
html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, font, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td {margin: 0;padding: 0;border: 0;outline: 0;font-size: 100%;vertical-align: baseline;background: transparent;}body {line-height: 1;}ol, ul {list-style: none;}blockquote, q {quotes: none;}blockquote:before, blockquote:after,q:before, q:after {content: '';content: none;} /* remember to define focus styles! */ :focus {outline: 0;} /* remember to highlight inserts somehow! */ins {text-decoration: none;}del {text-decoration: line-through;} /* tables still need 'cellspacing="0"' in the markup */ table {border-collapse: collapse;border-spacing: 0;}


/*---------- BODY --------------------------------*/

body {
	text-align: center;
	background: #e0e0e0;
	padding-bottom: 200px;
}

a {
	text-decoration: none;
}

/*---------- Wrapper --------------------*/

nav {
	width: 100%;
	height: 80px;
	background: #222;
}

ul {
	text-align: center;
}

ul li {
	font: 13px Verdana, 'Lucida Grande';
	cursor: pointer;
	-webkit-transition: padding .05s linear;
	-moz-transition: padding .05s linear;
	-ms-transition: padding .05s linear;
	-o-transition: padding .05s linear;
	transition: padding .05s linear;
}
ul li.drop {
	position: relative;
}
ul > li {
	display: inline-block;
}
ul li a {
	line-height: 80px;
	padding: 0 20px;
	height: 80px;
	color: #777;
	-webkit-transition: all .1s ease-out;
	-moz-transition: all .1s ease-out;
	-ms-transition: all .1s ease-out;
	-o-transition: all .1s ease-out;
	transition: all .1s ease-out;
}
ul li a:hover {
	color: #eee;
}

.dropOut .triangle {
	width: 0;
	height: 0;
	position: absolute;
	border-left: 8px solid transparent;
	border-right: 8px solid transparent;
	border-bottom: 8px solid white;
	top: -8px;
	left: 50%;
	margin-left: -8px;
}
.dropdownContain {
	width: 160px;
	position: absolute;
	z-index: 2;
	left: 50%;
	margin-left: -80px; /* half of width */
	top: -400px;
}
.dropOut {
	width: 160px;
	background: white;
	float: left;
	position: relative;
	margin-top: 0px;
	opacity: 0;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-moz-box-shadow: 0 1px 6px rgba(0,0,0,.15);
	box-shadow: 0 1px 6px rgba(0,0,0,.15);
	-webkit-transition: all .1s ease-out;
	-moz-transition: all .1s ease-out;
	-ms-transition: all .1s ease-out;
	-o-transition: all .1s ease-out;
	transition: all .1s ease-out;
}

.dropOut ul {
	float: left;
	padding: 10px 0;
}
.dropOut ul li {
	text-align: left;
	float: left;
	width: 125px;
	padding: 12px 0 10px 15px;
	margin: 0px 10px;
	color: #777;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background .1s ease-out;
	-moz-transition: background .1s ease-out;
	-ms-transition: background .1s ease-out;
	-o-transition: background .1s ease-out;
	transition: background .1s ease-out;
}

.dropOut ul li:hover {
	background: #f6f6f6;
}

ul li:hover a { color: white; }
ul li:hover .dropdownContain { top: 65px; }
ul li:hover .underline { border-bottom-color: #777; }
ul li:hover .dropOut { opacity: 1; margin-top: 8px; }
/** global **/
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


/** body **/
div#body {
	padding:10px 0;
	background:#fff url('images/content-bg.jpg') repeat-x scroll top left;
}


/** content+sidebar styles **/
div#content {
	width:600px;
	float:left;
}
div.column-left {
	float:left;
	margin-right:20px;
}
div.column-right {
	float:right;
}
div#sidebar {
	width:268px;
}
div#sidebar ul {
	margin:0;
	padding:0;
	list-style:none;
}
div#sidebar li ul {
	margin-bottom:20px;
	width:250px;
}
div#sidebar li ul li {
	display:block;
	padding:12px 10px;
	border-bottom:1px solid #ddd;
	color:#777;
}
div#sidebar li ul li a {
	color:#333;
	text-decoration:none;
	font-family:Verdana, Geneva, sans-serif;
	font-weight:normal;
}
div#sidebar li ul li a:hover {
	color:#09285E;
	text-decoration:underline;
}


div#sidebar li ul.blocklist li {
	padding:0;
}
div#sidebar li ul.blocklist li.selected-item  {
	border-bottom:none;
}
div#sidebar li ul.blocklist li.selected-item a {
	color:#fff;
	font-weight:bold;
	background:transparent url('images/item-selected.jpg') no-repeat;
}
div#sidebar li ul.blocklist li.selected-item a:hover {
	text-decoration:none;
}
div#sidebar li ul.blocklist li a {
	color:#666;
	width:260px;
	display:block;
	padding:13px 10px;
}

div#sidebar h4 { 
	color:#0C367E;
	font-family:arial;
	font-size:16px;
	text-transform:uppercase;
	font-weight:bold;
	margin:0;
	padding:7px 10px;
}


/** footer **/
div#footer {
	padding:20px 20px;
	color:#fff;
	border-top:1px solid #ccc;
}
div#footer p {
	color:#666;
	margin:0;
	font-size:11px;
	width:50%;
}
div#footer p.left { float:left; }
div#footer p.right { float:right; text-align:right; }
div#footer p a {
	color:#666;
	font-weight:bold;
	text-decoration:none;
	border-bottom:1px solid #999;
}



/** clear fix **/
.clear:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
 
.clear {
	display: inline-block;
}
.clear {
	display: block;
}

</style>
<!-- CHANGE for site header and code -->
<nav>
		<ul>
			<li><a href="#">Bot Performance and Analytics</a></li>
			<li class="drop">
				<a href="https://www.dashbot.io/login">Dashbot</a>
				
				<div class="dropdownContain">
					<div class="dropOut">
						<div class="triangle"></div>
						<ul>
							<li>Plan</li>
							<li>Account Settings</li>
							<li>Switch Account</li>
							<li>Sign Out</li>
						</ul>
					</div>
				</div>
			
			</li>
			<li><a href="#">Help</a></li>
		</ul>
</nav>
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

