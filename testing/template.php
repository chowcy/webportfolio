<html>
    <head>
    <meta charset="UTF-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!--Font Awesome Icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<!--my custom style sheet-->
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="img/m.jpg">
        <title>Cathy | <?=$title?></title>
    </head>
    <body>
	    <header>
			<div><a id="skiptomain" href="#main">Skip to Main Content</a></div>
			<ul aria-label="language toggle" class="nav navbar-nav language-toggle">
					<li><a href="home.html" hreflang="en"><img src="img/english.png" alt="english icon" class="icon"><span aria-label="english" id="en"></span></a></li>
					<li><a href="de/home.html" hreflang="de"><img src="img/german.png" alt="german icon"  class="icon"><span aria-label="german" id="de"></span></a></li>
			</ul>
			<h1>CATHY CHOW</h1>

			<nav>
				<ul class="nav navbar-nav">
					<li><a href="home.html" hreflang="en" class="active"><h2>Home</h2></a></li>
					<li><a href="translation.html" hreflang="en"><h2>Translation Portfolio</h2></a></li>
					<li><a href="projects.html" hreflang="en"><h2>Projects</h2></a></li>
					<li><a href="contact.html" hreflang="en"><h2>Contact</h2></a></li>
				</ul>
			</nav>
		</header>
        <?=getContent()?>
		<footer>
			<ul class="external-links">
			<li><a href="https://www.linkedin.com/in/cathy-chow-5541aa95" hreflang="en" target="_blank" aria-label="linkedin"><i class="fa fa-linkedin-square"></i><span id="linkedin"></span></a></li>
			<li><a href="files/resume.pdf"><i class="fa fa-file-pdf-o"></i><span id="resume"></span>Resum&eacute;</a></li>
			</ul>
			<aside>&copy; Cathy Chow, last updated Nov 5, 2016</aside>
		</footer>
    </body>
</html>