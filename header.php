	    <header>
			<div><a id="skiptomain" href="#main">Skip to Main Content</a></div>
			<ul aria-label="language toggle" class="nav navbar-nav language-toggle">
					<li><a href=<?php if ($projects) { echo "projects.php";} 
										elseif ($translation) { echo "translation.php";} 
										else if ($resume) { echo "resume.php";} 
										else { echo "index.php";}?> 
										hreflang="en"><img src="img/english.png" alt="english icon" class="icon"><span aria-label="english" id="en"></span></a></li>
					<li><a href=<?php if ($projects) { echo "de/projects.php";} 
										elseif ($translation) { echo "de/translation.php";} 
										else if ($resume) { echo "de/resume.php";} 
										else { echo "de/index.php";}?> hreflang="de"><img src="img/german.png" alt="german icon"  class="icon"><span aria-label="german" id="de"></span></a></li>
			</ul>
				<h1>CATHY CHOW </br></br>
			Programmer. Designer. Humanist.</h1>


			<nav>
				<ul class="nav navbar-nav">
					<li><a href="index.php" hreflang="en" class=<?php if ($home) { echo "active";}?>><h2>Home</h2></a></li>
					<li><a href="projects.php" hreflang="en" class=<?php if ($projects) { echo "active";}?>><h2>Projects</h2></a></li>
					<li><a href="translation.php" hreflang="en" class=<?php if ($translation) { echo "active";}?>><h2>Translations</h2></a></li>
					<li><a href="resume.php" hreflang="en" class=<?php if ($resume) { echo "active";}?>><h2>Resume</h2></a></li>
				</ul>
			</nav>
		</header>