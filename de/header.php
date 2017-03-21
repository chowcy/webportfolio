	<header>
		<div><a id="skiptomain" href="#main">Zum Hauptinhalt springen</a></div>
		<ul aria-label="language toggle" class="nav navbar-nav language-toggle">
				<li><a href=<?php if ($projects) { echo "../projects.php";} 
										elseif ($translation) { echo "../translation.php";} 
										else if ($resume) { echo "../resume.php";} 
										else { echo "../index.php";}?> hreflang="en"><img src="../img/english.png" alt="english icon" class="icon"><span aria-label="english" id="en"></span></a></li>
				<li><a href=<?php if ($projects) { echo "projects.php";} 
										elseif ($translation) { echo "translation.php";} 
										else if ($resume) { echo "resume.php";} 
										else { echo "index.php";}?> hreflang="de"><img src="../img/german.png" alt="german icon"  class="icon"><span aria-label="german" id="de"></span></a></li>
		</ul>
				<h1><span id="name">CATHY CHOW</span> </br></br>
					Programmer. Designer. Humanist.</h1>


		<nav>
			<ul class="nav navbar-nav">
				<li><a href="index.php" hreflang="de" class=<?php if ($home) { echo "active";}?>><h2>Startseite</h2></a></li>
				<li><a href="projects.php" hreflang="de" class=<?php if ($projects) { echo "active";}?>><h2>Projekte</h2></a></li>
				<li><a href="translation.php" hreflang="de" class=<?php if ($translation) { echo "active";}?>><h2>&Uuml;bersetzung</h2></a></li>
				<li><a href="resume.php" hreflang="de" class=<?php if ($resume) { echo "active";}?>><h2>Lebenslauf</h2></a></li>
			</ul>
		</nav>
	</header>