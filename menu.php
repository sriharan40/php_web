<style>
/* Navigation Menu - Background */
.navigation {
  /* critical sizing and position styles */
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 0;
  
  /* non-critical appearance styles */
  list-style: none;
  background: #111;
}

/* Navigation Menu - List items */
.nav-item {
  /* non-critical appearance styles */
  width: 200px;
  border-top: 1px solid #111;
  border-bottom: 1px solid #000;
}

.nav-item a {
  /* non-critical appearance styles */
  display: block;
  padding: 1em;
  background: linear-gradient(135deg, rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 100%);
  color: white;
  font-size: 1.2em;
  text-decoration: none;
  transition: color 0.2s, background 0.5s;
}

.nav-item a:hover {
  color: #c74438;
  background: linear-gradient(135deg, rgba(0,0,0,0) 0%,rgba(75,20,20,0.65) 100%);
}

/* Site Wrapper - Everything that isn't navigation */
.site-wrap {
  /* Critical position and size styles */
  min-height: 100%;
  min-width: 100%;
  background-color: white; /* Needs a background or else the nav will show through */
  position: relative;
  top: 0;
  bottom: 100%;
  left: 0;
  z-index: 1;
  
  /* non-critical apperance styles */
  padding: 4em;
  background-image: linear-gradient(135deg, rgb(254,255,255) 0%,rgb(221,241,249) 35%,rgb(160,216,239) 100%);
  background-size: 200%;
}

/* Nav Trigger */
.nav-trigger {
  /* critical styles - hide the checkbox input */
  position: absolute;
  clip: rect(0, 0, 0, 0);
}

label[for="nav-trigger"] {
  /* critical positioning styles */
  position: fixed;
  left: 15px; top: 15px;
  z-index: 2;
  
  /* non-critical apperance styles */
  height: 30px;
  width: 30px;
  cursor: pointer;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' version='1.1' x='0px' y='0px' width='30px' height='30px' viewBox='0 0 30 30' enable-background='new 0 0 30 30' xml:space='preserve'><rect width='30' height='6'/><rect y='24' width='30' height='6'/><rect y='12' width='30' height='6'/></svg>");
  background-size: contain;
}

/* Make the Magic Happen */
.nav-trigger + label, .site-wrap {
  transition: left 0.2s;
}

.nav-trigger:checked + label {
  left: 215px;
}

.nav-trigger:checked ~ .site-wrap {
  left: 200px;
  box-shadow: 0 0 5px 5px rgba(0,0,0,0.5);
}

body {
	/* Without this, the body has excess horizontal scroll when the menu is open */
  overflow-x: hidden;
}

/* Additional non-critical styles */

h1, h3, p {
  max-width: 600px;
  margin: 0 auto 1em;
}

code {
	padding: 2px;
	background: #ddd;
}

/* Micro reset */
*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;}
html, body { height: 100%; width: 100%; font-family: Helvetica, Arial, sans-serif; }
</style>
<!--close-Header-part--> 


		<ul class="navigation">
		<li>
		<a href="#">Bot Analytics</a>
		<ul>
			<li>
				<li class ="nav-item"><a href="https://www.dashbot.io/login">Dashbot Analytics</a>         
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Training Bot</a>
		<ul>
			<li class = "nav-item">
				<a href="https://console.api.ai/api-client/#/login">API.AI</a>
			</li>
			
		</ul>
	<li>
	<li>
		<a href="#">Business Cases</a>
		<ul>
			 <li class = "nav-item"><a href="index.php">Top Selling Offers</a></li>
			 <li class = "nav-item"><a href="fb_campaign.php">Broadcast to FB users</a></li>
		</ul>
	<li>
	<li>
		<a href="#">Controls</a>
		<ul>
			<li class = "nav-item">
				<a href="logout.php">Sign Out</a>
			</li>
			
		</ul>
	<li>
</ul>
<input type="checkbox" id="nav-trigger" class="nav-trigger" />
<label for="nav-trigger"></label>
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

