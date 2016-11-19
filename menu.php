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

