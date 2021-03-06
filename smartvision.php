<!DOCTYPE html>
<html lang="en">
	<?php $title='SmartVision'; include("head.php");?>
	<?php $projects = true; include("header.php");?>
	<main id="main">
		<section class="portfolio-section portfolio-overview">
			<div class="centerize">
				<div class="title-section">
					<h3>SmartVision</h3>
					<h4>UX Design</h4>
				</div>
				<div class="row context">
					<div class="col-xs-12 col-md-12 col-lg-6">
						<h4>Overview</h4>
						<p>SmartVision is a smartphone application that aims to improve low-vision patients’ lives, especially those who suffer from central vision loss, by being a relatively inexpensive, portable, and multifunctional magnifying tool. </p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-6">
						<a href="img/eds.png" data-lightbox="eds" data-title="Mid-fi screen sample">
							<img src="img/eds.png" width='100%' alt="mid-fi screen sample">
						</a>
					</div>
				</div>
				<div class="row context">
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Role</h4>
						<p>UX Designer</p>
						<h4>Time Frame</h4>
						<p>Feb 2017 - Apr 2017</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Context</h4>
						<p>Applied Team Project</p>
						<h4>Tools</h4>
						<p>Paper and pencil, Photoshop, Marvel</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Skills</h4>
						<p>Wireframing, Prototyping, Presenting</p>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Competitive Analysis</h3>
				<p>In order to best help low vision people, my team conducted a competitive analysis with other smartphone applications to decide what features we should focus on designing and implementing.</p>

				<p>Parameters included: price, operating system, ratings, presence of filters, ads, gestures, etc.</p>
				<p>We learned there are many great magnifying apps out there! Because one team member had experience with Computer Vision and stitching, we envisioned making our app different by allowing users to scan over something they wanted to read, and then use stitching to make it into one large static picture that users could read from. They would ideally be able to zoom in on the picture and add contrast filters.</p>
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Interaction Map</h3>
				<p>I then selected one application and mapped the different interactions in the app, so that I could understand the information architecture and interactions.</p>
				<img src="img/mdpinteractionmap1.jpg" width='50%' alt="interaction map">
				<img src="img/mdpinteractionmap2.jpg" width='50%' alt="interaction map details">
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Sketches</h3>
				<p>Next, I drew some sketches to brainstorm what gestures and interfaces would be appropriate for each feature we were interested in implementing.</p>
				<img src="img/mdpsketches.jpg" width='50%' alt="sketches of application gestures">
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Digital Prototype</h3>
				<p>I created a digital prototype using Photoshop and Marvel. Swiping left and right would allow users to change the color contrast and combinations to suit their vision.</p>
				<img src="img/smartvisionprototype.png" width='50%' alt="sketches of application gestures">
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Final Thoughts and Lessons</h3>
				<p>This project presented quite a few challenges and remains incomplete. The biggest challenge was that our team lacked the resources and skills to do this project. I had web development skills, but had never used Android Studio or written Java, and my other teammates had not either. This resulted in us spending a lot of our time learning Android Studio. Second, since there are many magnifying apps in the market, our app at a minimum had to have the common features expected in an app, such as contrasting filters, ability to zoom, and an easy user interface, in order to be competitive. However, these features alone took so much time to implement that we did not make much progress by semester's end.</p>
				<p>The lesson learned here is that teams need to honestly assess each team member's strengths and weaknesses and ensure a project is doable, given everybody's capabilities. Our vision for this app was perhaps too ambitious, but we learned our lessons, and the next app we developed -- <a href="/portfolio/eyediseasesimulator.php" hreflang="en">an eye disease simulator</a> -- went better!</p>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<a href="projects.php">Browse other Projects</a>
			</div>
		</section>

	</main>
	<?php include("footer.php");?>
</body>
</html>
