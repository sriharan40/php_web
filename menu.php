<style>
@import url(http://fonts.googleapis.com/css?family=Oxygen:400,700);

/** global **/
body {
	margin:0px auto;
	padding:0;
	font-family: 'Oxygen', 'sans-serif';
	font-size: 1.0em;
	color:#333;
	background:#fff;
}
* {
	margin:0;
	padding:0;
}


/** element defaults **/
table {
	width:100%;
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
a.button { 
    background-color: #0B3170;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: inline-block;
    font-weight: bold;
    padding: 8px 15px;
    text-decoration: none;
    text-transform: uppercase;
}

a.button:hover {
	background-color: #092758;
}

a.button-reversed { 
    background-color: #C2D7EF;
    color: #0B3170;
}

a.button-reversed:hover {
	background-color: #D7E5F4;
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
	font-family:Oxygen, Arial, Helvetica, sans-serif;
}
fieldset form input, fieldset form select, fieldset form textarea {
	padding:5px;
	color:#333333;
	font-size:13px;
	font-family:Oxygen, Arial, Helvetica, sans-serif;
	border:1px solid #ddd;
}
fieldset form input.formbutton {
	background:#0C3A87;
	border:none;
	border-bottom:3px solid #082659;
	color:#ffffff;
	font-weight:bold;
	padding:5px 10px;
	font-size:13px;
}
h1 {
	font-size:2.4em;
}
h2 {
	color:#0B2F6B;
	font-size:1.8em;
	font-weight:bold;
	letter-spacing:-1px;
	padding:0 0 5px;
	margin:0;
}
h3 {
	color:#0D357B;
	font-size:1.6em;
	padding-bottom:10px;
}
h4 {
	padding-bottom:10px;
	font-size:1.4em;
	color:#0C3A85;
}
h5 {
	padding-bottom:10px;
	font-size:1.2em;
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
	margin:0px auto;
	padding:0;
}

.width {
	width:920px;
	margin: 0 auto;
}


/** sitename **/
div#sitename {
	background-color: #292929;
	background: linear-gradient(#111, #333);
	border-bottom: 1px solid #1563E1;
}

div#sitename h1 {
	letter-spacing:-3px;
	margin:0;
	font-size: 3.5em;
	float: left;
	padding:10px 0 10px;
}
div#sitename h1 a,
div#sitename h1 a:hover {
	color:#fff;
	font-weight:bold;
	text-shadow:0px 2px 2px #000;
	text-decoration:none;
}


nav {
	float: right;
	margin-top: 35px;
}

nav ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

nav ul li {
	float: left;
	display: block;
	padding: 0;
}


nav ul li a {
    color: #ccc;
    display: block;
    font-size: 0.95em;
    letter-spacing: 0;
	margin: 5px 3px 0;
	font-weight: normal;
    padding: 8px 15px 8px;
    text-decoration: none;
box-shadow:-1px 1px 0 transparent;
}
nav ul li.selected a,
nav ul li.selected a:hover { 
	color: #fff;
	background-color: #000;
	font-weight:bold;

	margin: 8px 2px 0;
	box-shadow: -1px 1px 0 #333;
}


nav ul li a:hover {
	color: #fff;
	text-decoration: none;
}

/** header **/
header {
	padding:30px 0 30px;
	margin:0 auto;
	background-color:#0B3170;
	background: linear-gradient(#10469E, #092758);
}
header h2 {
	color:#ffffff;
	font-size: 1.9em;
	padding-bottom:0;
	letter-spacing:0;
}
header div.tagline {
	color:#C2D7F9;
	font-size:0.9em;
}
header div.tagline a {
	color:#ffffff;
}



/** body **/
section#body {
	padding:10px 0;
	background:#fff;
}


/** content+sidebar styles **/
section#content {
	width:600px;
}
.column-left {
	float:left;
	margin-right:20px;
}
.column-right {
	float:right;
}
aside#sidebar {
	width:268px;
}
aside#sidebar ul {
	margin:0;
	padding:0;
	list-style:none;
}
aside#sidebar li ul {
	margin-bottom:20px;
}
aside#sidebar li ul li {
	display:block;
	padding:12px 10px;
	border-bottom:1px solid #ddd;
	color:#777;
}
aside#sidebar li {
	color:#666;
	font-size: 0.9em;
}
aside#sidebar li ul li a {
	text-decoration:none;
	color:#666;
	font-weight:normal;
}
aside#sidebar li ul li a:hover {
	color:#09285E;
	text-decoration:underline;
}


aside#sidebar li ul.blocklist li {
	padding:0;
}
aside#sidebar li ul.blocklist li.selected-item  {
	border-bottom:none;
}
aside#sidebar li ul.blocklist li.selected-item a,
aside#sidebar li ul.blocklist li.selected-item a:hover {
	color:#fff;
	font-weight:bold;
	background: linear-gradient(#10469E, #092758);
}
aside#sidebar li ul.blocklist li a:hover {
	background:#f0f0f0;
	text-decoration:none;
}
aside#sidebar li ul.blocklist li a {
	color:#666;
	display:block;
	padding:10px 10px;
}

aside#sidebar h4 { 
	color:#0C367E;
	font-size:16px;
	text-transform:uppercase;
	font-weight:bold;
	margin:0;
	padding:7px 10px;
}


article {
    padding: 10px 10px 20px 5px;
	font-size: 0.9em;
 }

article h2 {
    padding-bottom: 0;
   font-size: 2.1em;
}

article .article-info {
    color: #999;
    font-size: 0.9em;
    letter-spacing: -0.5px;
    padding: 0 0 10px 0;
}

article .article-info a { 
	color: #666;
}



/** footer **/
footer {
	padding:20px 0px;
	color:#fff;
	border-top:1px solid #ccc;
}

footer p {
	color:#666;
	margin:0;
	font-size:11px;
	width:50%;
}
footer p.left { float:left; text-align:left; }
footer p.right { float:right; text-align:right; }
footer p a {
	color:#666;
	font-weight:bold;
	text-decoration:none;
	border-bottom:1px solid #999;
}
footer p a:hover { color:#0C3A85; border-bottom-color: #0C3A85; }


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





@media screen and (max-width: 740px) {

	body { font-size: 0.9em; }	

	#sitename { letter-spacing:-2px; text-align:center; }


	.width { width:auto; padding-left: 10px; padding-right: 10px; }

	.column-left, .column-right { margin:0 5px; }
	
	section#content, aside#sidebar { float: none; width: auto; }

	footer .footer-content ul { width: auto; float: none; }
}


@media screen and (max-width: 540px) {

	body { font-size: 0.8em; }

	header, header h1 a, header h1 a:hover { text-align: center; padding: 10px 0 0 0; font-size: 1.1em; }

	nav ul li { float: none; text-align:center;  }

	nav ul li a { margin-top: 0; padding: 0.5em; }

	nav { height: auto; position: relative; }

}
</style>
<ul><h3>Bot Performance and Analytics</h3>
<ol>
<li><a href="https://www.dashbot.io/login" target="blank">Dashbot Analytics</a></li>
    </ol></ul>

<ul><h3>Bot Training</h3>
<ol>
<li><a href="https://console.api.ai/api-client/#/login">API AI</a></li>
    </ol></ul>
<ul><h3>Business Cases</h3>
<ol>
<li><a href="index.php">Top Selling Offers</a></li>
<li><a href="index.php">Broadcast to FB users</a></li>
    </ol></ul>

<iframe width="350" height="430" src="https://console.api.ai/api-client/demo/embedded/44b8113a-9d4f-4ad3-b71d-feee91c13b3e"></iframe>

<br /><br />
<h4><u><a href="logout.php">Logout</a></u></h4>
