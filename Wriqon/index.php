<!DOCTYPE html>
<html lang="en">
<!--  Wright Bosley, 24 November 2018, index -->

<head>
	<meta charset="UTF-8">
	<title>Wright's Portfolio</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
<header>
	<br>
	<img class="displayed" src="images/notforgotten.jpg">
</header>
<article>
	<h1>Wright's Portfolio</h1>
	<p>I'm just here so I won't get fined.</br></p>
	<p>The day is <span id="day"></span>. The time is <span id="time"></span>.</p>
	<?php
		echo 'PHP is working';
	?>
	
	<h2>About Me</h2>
	<p>I'm just about that action, boss.</p>
	
	<h3>Favorite Quote...</h3>
	<blockquote>
		<p>"If you think like a loser you will lose. If you think like a winner, well, that’s not enough – but it’s a start."</p>
		<em>-Mike Cernovich</em>
	</blockquote>
	
	<h2>HTML Project Links</h2>
	<p>This is where I'll be putting links to all my completed HTML projects along with a brief description of each project.</p>
	<dl>
		<dt><a href="cheer/index.php">Cheerleading:</a></dt>
		<dd>Come here if you want to better your skills.</dd><br>
		
		<dt><a href="gallery/index.html">Photo Gallery:</a></dt>
		<dd>Come look at some pictures that aren't mine.</dd><br>
	</dl>
</article>
<footer>
	<p>Site created by WBosley. Copyright 2019. All rights reserved.</p>
</footer>

<script> <!-- gets date and time and puts it under the main title -->
	var today = new Date();
	var PM = false;
	var h = today.getHours();
	var m = today.getMinutes();
	var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	day.innerHTML = days[today.getDay()];
	if (h > 12) {
		h = h - 12;
		if (m < 10) {
			time.innerHTML = h + ":0" + m + "PM";
		} else
		time.innerHTML = h + ":" + m + "PM";
	}
	else {
		if (m < 10) {
			time.innerHTML = h + ":0" + m + "AM";
		} else
		time.innerHTML = h + ":" + m + "AM";
	}	
</script>

</body>
</html> 
