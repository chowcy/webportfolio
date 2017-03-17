<?php

$title = 'Home';

$myfile = fopen("home.html", "r") or die("Unable to open file!");
$homeContent = fread($myfile,filesize("home.html"));
fclose($myfile);

// $homeContent = '	<main id="main">
// 		<div class="container">
// 			<div class="row">
// 				<div class="col-xs-12 col-lg-6">
// 					<img alt="picture of Cathy after finishing half-marathon" src="img/marathon.jpg" id="face" class="img-responsive img-rounded">
// 						<section id="about" >
// 						<h3>About Me</h3>
// 							<p>Hello! I am a first-year Master\'s student specializing in Human-Computer Interaction at the University of Michigan School of Information
// 								with a planned graduation date of May 2018. Before I started school here, I taught English in Mainz, Germany as part of the Fulbright English Teaching Assistant Program!
// 							</p>
// 							<p>
// 								I have a specific interest in designs that are accessible regardless of ability, language, and device. (I am still learning!) My secondary academic interests include translation, languages, programming, psychology, biology, and statistics. Ahh, there are so many interesting things in the world! In terms of activities, I enjoy the usual - cooking, eating, petting cats (see my gallery). I don\'t enjoy running, but I somehow ran a half-marathon during my Fulbright year. You can see my shiny medal in the photo ;) 
// 							</p>
// 					</section>
// 					<section id="education" >
// 						<h3>Education</h3>
// 							<h4>University of Michigan School of Information</h4>
// 							<h5>Master of Science in Information. April 2018, Ann Arbor</h5>
// 							<h4>University of Michigan School of Literature, Science, and the Arts</h4>
// 							<h5>Bachelor of Science in German. Minor in Environmental Science. May 2015, Ann Arbor</h5>
// 					</section>
// 				</div>
// 				<div class="col-xs-12 col-lg-6">
// 					<section id="experience" >
// 						<h3>Experience</h3>
						
// 							<h4>Media Assistant</h4>
// 								<h5>University of Michigan Language Resource Center | 2016 - present</h5>
// 								<p>
// 									My enthusiasm for languages and technology naturally led me to the Language Resource Center, where media and technology are used to faciliate language-learning. I assist in any way possible, but focus on the back-end and information architecture. I\'m currently learning about Filemaker, but before that, I was helping plan Translate-a-thon (see Translation page!)
// 								</p>
// 							<h4>Fulbright English Teaching Assistant</h4>
// 								<h5 lang="de">Integrierte Gesamtschule Mainz-Bretzenheim | 2015 - 2016</h5>
// 								<p>
// 									I am so honored to have been able to spend 10 months in <span lang="de">Mainz</span>, Germany teaching English to high-school-age students. I planned lessons, led conversation groups, and discussed a lot of American culture, especially elections and gun control, which I admit were quite difficult to explain. I think the best part of this Fulbright experience though was all the connections I made outside of school. I tutored, attended as many events as I could, and even spent my last month volunteering in the kitchen of the <span lang="de">Bar Jeder Sicht</span>, a meeting place for the LGBT+ community. It was a great year, but my one regret was not volunteering earlier!
// 								</p>

// 							<h4>EECS 183 Grader</h4>
// 								<h5>University of Michigan Department of Computer Science and Engineering | 2015 - present</h5>
// 								<p>
// 									I look at code and dock off points if it\'s ugly or incoherent. It\'s one of my 
// 									favorite jobs.
// 								</p>

// 							<h4>Webmaster and Historian</h4>
// 								<h5>German Club at the University of Michigan | 2014 - 2015</h5>
// 								<p>
// 									I was involved in German Club since my junior year of undergrad and went on to get an executive 
// 									board position as Webmaster and Historian. As Historian, I took a lot of photos, and 
// 									as Webmaster, I posted these photos on our Facebook page and wrote weekly updates. 
// 								</p>

// 							<h4>Teacher\'s Assistant</h4>
// 								<h5>Deutsche Schule Ann Arbor | 2014</h5>
// 								<p>
// 									I helped the teacher of the Kindergarten class "teach" German to her pupils. 
// 									I say "teach" but it\'s more like "attemped to teach." Kids will learn what they want 
// 									to learn.
// 								</p>

// 							<h4>Intern</h4>
// 								<h5 lang="de">Charit&eacute; Universit&auml;tsmedizin Berlin | 2014</h5>
// 								<p>
// 									As a Cultural Vistas Fellow in the Summer of 2014, I got to live and intern in Berlin 
// 									for free! I worked at a hospital, shadowing nutritional therapists, social workers,
// 									and doctors in the adiposity and gastroenterological <span lang="de">Kinderklinik</span> (children\'s clinic) 
// 									of the Charit&eacute;, as well as training personnel on SPSS and creating a database 
// 									for an exciting upcoming study aiming to improve fatty liver disease diagnosis.
// 								</p>
					
// 					</section>
// 				</div>
// 			</div>
// 		</div>
// 	</main>'

function getContent() {
	if ($title == 'Home') {
    	return $homeContent;
    }
}

include('template.php');

?>