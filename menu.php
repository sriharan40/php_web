<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,700);

body {
	background: #2E6290;
	margin:0;
	padding:0;
	font-family: 'Roboto', 'sans-serif';
	font-size: 1.0em;
	color: #666;
	font-weight: 200;
}

* {
	margin:0;
	padding:0;
}

/** element defaults **/
table {
	width: 100%;
	text-align: left;
}

th, td {
	padding: 10px 10px;
}

th {
	color: #666;
	background: #ccc none repeat-x scroll left top;
}

td {
	border-bottom: 1px solid #ccc;
}

code, blockquote {
	display: block;
	border-left: 5px solid #222;
	padding: 10px;
	margin-bottom: 20px;
}
code {
	background-color: #222;
	color:#ccc;
	border: none;
}
blockquote {
	border-left: 5px solid #222;
}

blockquote p {
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
	margin: 0;
	color: #333;
	height: 1%;
}

p {
	line-height: 1.9em;
	margin-bottom: 20px;
}

a, .sidebar li ul li a.readmore {
	color: #F60;
}

a:hover {
	color: #2E6290;
}

.sidebar li ul li a.readmore:hover {
	color: #FF8533;
}

a:focus {
	outline: none;
}


a.button { 
    background-color: #F60;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: inline-block;
    font-weight: bold;
    padding: 8px 15px;
    text-decoration: none;
    text-transform: uppercase;
}

a.button:hover {
	background-color: #FF8533;
}

a.button-reversed { 
    background-color: #2E6290;
}

a.button-reversed:hover {
	background-color: #214769;
}

fieldset {
	display: block;
	border: none;
	border-top: 1px solid #ccc;
}

fieldset legend {
	font-weight: bold;
	font-size: 0.9em;
	padding-right: 10px;
	color: #333;
}

fieldset form {
	padding-top: 15px;
}

fieldset p label {
	float: left;
	width: 150px;
}

form input, form select, form textarea {
	padding: 5px;
	color: #333333;
	border: 1px solid #ddd;
	border-right:1px solid #ccc;
	border-bottom:1px solid #ccc;
	background-color:#fff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.9em;
}

form input.formbutton {
	border: none;
	background: #FA7108;
	color: #ffffff;
	font-weight: bold;
	padding: 6px 10px;
	font-size: 0.8em;
	letter-spacing: 1px;
	width: auto;
	overflow: visible;
}

form.searchform input {
  font-size: 0.9em;
    padding: 6px;
}

form.searchform p {
	margin: 5px 0;
}


span.required {
	color: #ff0000;
}

h1 {
	color: #000;
	font-size: 2.7em;
}

h2 {
	color: #0C2136;
	font-size: 2.2em;
	letter-spacing: -1px;
	font-weight: bold;
	padding: 0 0 5px;
	margin: 0;
}

h3 {
	color: #FA8B37;
	font-size: 1.9em;
	font-weight: normal;
	margin-bottom: 10px;
	letter-spacing: -1px;
}

h4 {
    color: #2E6290;
    font-size: 1.2em;
    font-weight: normal;
    padding-bottom: 10px;
}

h5 {
	padding-bottom: 10px;
	font-size: 1.1em;
	color: #999;
}

ul, ol {
	margin: 0 0 35px 35px;
}

li {
	padding-bottom: 5px;
}

li ol, li ul {
	font-size: 1.0em;
	margin-bottom: 0;
	padding-top: 5px;
}

.width {
	width: 90%;
	margin: 0 auto;
}

#container {
	margin: 0 auto;
}

header {
	padding: 30px 20px;
	margin: 0 auto;
	text-align:left;
}

header h1 a, header h1 a:hover {
    color: #FC8E40;
    font-size: 1.4em;
    padding: 10px 0;
    font-weight: bold;
    letter-spacing: -5px;
    line-height:45px;
    text-transform: lowercase;
    text-decoration: none;
}

header h1 a span, header h1 a:hover span {
	color: #fff;
}


nav {
	height: 3.5em;
	width: 100%;
}

nav .inner-nav { 
	background-color: #0C1C29;
	border: 2px solid #0C1C29;
	height: 100%;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
}

nav ul {
	list-style: none;
	padding: 0;
	margin: 0;
	height: 50%;
	background-color: #14273A;
	border: 1px solid #14273A;
	border-radius: 15px;
}

nav ul li {
	float: left;
	display: block;
	padding: 0;
}


nav ul li a {
	color: #FFF;
	display: block;
	font-size: 1em;
	letter-spacing: 0.2px;
	font-weight: bold;
	text-transform: lowercase;
	text-decoration: none;
	padding: 1.04em 1.2em;
}


nav ul li a:hover {
	color: #FA8B37;
}

img.header-image { padding-top: 10px;
			margin-bottom: -3px; }

#body {
	background: #fff;
	margin: 0 auto;
 	padding: 1.04em;
	clear: both;
}

#content {
    float: right;
    width: 67%;
}

article {
    padding: 10px 10px 20px 5px;
 }

article h2 {
    padding-bottom: 0;
}

article .article-info {
    color: #c0c0c0;
    font-size: 0.9em;
    letter-spacing: -0.5px;
    padding: 0 0 10px 0;
}

article .article-info a { 
	color: #2E6290;
}

.sidebar {
    float: left;
    width: 31%;
	margin-top: 10px;
}

.sidebar h4 {	
	font-size: 1.4em;
	color: #fff;
	font-weight: bold;
	padding: 0 0 13px 0;
	background-color: #FA7108;
	border: 2px solid #FA7108;
	border-top-left-radius: 15px;
	border-top-right-radius: 15px;
}

.sidebar h4 span {
	display: block;
	padding: 8px 10px 0 10px;
	background-color: #FA8B37;
	border: 1px solid #FA8B37;
	border-radius: 15px;


}
.sidebar ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

.sidebar ul li {
	margin-bottom: 20px;
	line-height: 1.9em;
}

.sidebar li ul {
    list-style: none outside none;
    margin: 0px;
}

.sidebar li ul li {
	display: block;
	border-top: none;
	padding: 7px 10px;
	margin: 0;
	line-height: 1.5em;
}

.sidebar li ul li.text { 
	border-bottom: none;
}



.sidebar li ul li a {
	font-weight: normal;
	color: #666;
}

.sidebar li ul li a:hover {
	color: #000;
}


.sidebar li ul li a.readmore {
   font-weight: bold;
}




.clear {
	clear: both;
}

footer {
	background: #222;
	border-top: 2px solid #eee;
}

footer p {
	text-align: left;
	color: #ccc;
	font-size: 0.9em;
	margin: 0;
	padding: 0;
}

footer p a {
	color: #ccc;
	font-weight: bold;
}

.footer-content {
	padding: 1.04em;
}

footer .footer-content ul {
	width: 33%;
	list-style: none;
	margin: 0;
	padding: 0;
	float: left;
}

footer .footer-content li {
	padding: 5px 5px;
}

footer .footer-content li a, footer .footer-content h4 {
}

footer .footer-content li a {
 color: #505050;
    font-size: 0.9em;
    text-decoration: underline;
}

footer .footer-content li a:hover { 
	color: #909090;
}

footer .footer-content h4 {
   color: #ddd;
    font-size: 1.4em;
    font-weight: bold;
    padding-bottom: 0;
}

footer .footer-content ul.endfooter {
	margin-right: 0;
}
footer .footer-bottom {
	padding: 10px;
	text-align: center;
	background-color: #000;
}

footer .footer-bottom p {
	text-align: center;
}

footer .footer-bottom p, footer .footer-bottom p a {
	color: #666;
}



@media screen and (max-width: 740px) {

	body { font-size: 0.8em; }	

	header h1 a, header h1 a:hover { padding: 5px; letter-spacing:-2px; }

	div#container { width: auto; }

	footer .footer-content ul { margin-bottom: 15px; }

	footer .footer-content ul.endfooter { margin-bottom: 0px; }

	.width { width:auto; padding-left: 10px; padding-right: 10px; }
	
	#content, aside.sidebar { float: none; width: auto; }

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
<li><a href="https://www.dashbot.io/login" target="blank">Dashbot Analytics</a></li>
    </ol></ul>

<ul><h3>Bot Training</h3>
<li><a href="https://console.api.ai/api-client/#/login">API AI</a></li>
    </ul>
<ul><h3>Business Cases</h3>
<li><a href="index.php">Top Selling Offers</a></li>
<li><a href="index.php">Broadcast to FB users</a></li>
</ul>

<br /><br />
<h4><u><a href="logout.php">Logout</a></u></h4>
