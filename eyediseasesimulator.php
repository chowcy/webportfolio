<!DOCTYPE html>
<html lang="en">
	<?php $title='Eye Disease Simulator'; include("head.php");?>
	<?php $projects = true; include("header.php");?>
	<main id="main">
		<section class="portfolio-section portfolio-overview">
			<div class="centerize">
				<div class="title-section">
					<h3>Eye Disease Simulator</h3>
					<h4>UX Research and Design</h4>
				</div>
				<div class="row context">
					<div class="col-xs-12 col-md-12 col-lg-6">
						<h4>Overview</h4>
						<p>As part of a multidisciplinary team project hosted by the University of Michigan College of Engineering and sponsored by the UM Kellogg Eye Center, our team recreated an eye disease simulator mobile application that had previously been developed by a team of engineers led by our advisor. The app uses AR to simulate how those with eye diseases see the world, with the goal of educating others and increasing empathy towards low vision patients. Our team's goals were to 1) improve the app's usability and 2) redevelop the app on native Java instead of Unity for more flexibility in the future. Our team consisted of one advisor, one UX Researcher and Designer (me), and one full-stack Android developer.</p>
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
						<p>UX Researcher and Designer</p>
						<h4>Time Frame</h4>
						<p>Sep 2017 - Dec 2017</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Context</h4>
						<p>Applied Team Project</p>
						<h4>Tools</h4>
						<p>Paper and pencil, Illustrator, Marvel</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Skills</h4>
						<p>Wireframing, Prototyping, Heuristic Evaluation, Usability Testing, Writing Reports</p>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Background and Goals</h3>
				<p>In early 2017, a team of engineers worked with our advisor and a sponsor from the Kellogg Eye Center at the University of Michigan to develop a mobile application that simulated eye diseases. This team had conducted <span class="bold">one interview</span> with the sponsor, who was an ophthalmologist, to identify <span class="bold">user needs</span> and develop a product that addresses those needs. They discovered that:</p>
				<ul class="dots">
					<li>patients and eye doctors had difficulties communicating with each other because "sight is difficult to describe." It is hard for patients to describe how they are seeing, especially given that they may suffer from several eye diseases, and it is hard for doctors to describe how treatment may affect a patient's vision.</li>
					<li>patients may have trouble communicating with loved ones about how they see because sighted people may not fully understand how the patient sees the world.</li>
				</ul>
				<p>Additionally, one of the members of their engineering team had glaucoma, cataracts, and some vision loss in one eye, so he was able to provide insight on patients' experiences.</p>
				<p>From this information, the team decided to build an eye disease simulator with two <span class="bold">goals</span> in mind:</p>
				<ul class="dots">
					<li>to improve a patient's quality of life by allowing them to better communicate their vision to loved ones, thus increasing empathy</li>
					<li>to increase patient compliance by allowing doctors to better educate patients on how treatment (or failure to comply with treatment) could affect a patient's vision</li>
				</ul>
				<p>Given limited resources and difficulty accessing the user population of the app - eye doctors and patients with low vision - our team decided not to pursue further interviews with the user population when our team took over the project. Instead, we used the previous team's existing user research and focused our energy on improving the user interface and re-developing the application with Java instead of Unity, which had posed limitations for the previous development team.</p>
			</div>

		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Interaction Map</h3>
				<p>While my teammate worked on researching VR libraries and getting our new app off the ground, I focused my efforts on the user interface experience. My first step in redesigning the application was to map out the interactions in the existing application to examine the current interaction flow and get a comprehensive overview of the app. The app guides the user through a series of steps to set up and draw the blind spots that will be displayed during the simulation. However, the map reveals a linear flow of many steps, without any back buttons, as well as unclear visual indicators on how to interact after the simulation.</p>
			</div>
			<a href="img/eds-interaction-map.jpg" data-lightbox="eds" data-title="Interaction Map">
				<img src="img/eds-interaction-map.jpg" width='50%' alt="interaction map of previous app">
			</a>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Heuristic Evaluation</h3>
				<p>Next, I did a usability analysis of the previous app using Nielsen's (1994) Ten Usability Heuristics, which are a set of general usability principles. I stepped through the app one heuristic at a time to analyze which principles were violated and which not. As a starting point to my design process, the heuristic evaluation and interaction map were a quick way to find the most egregious usability issues in the app without having to recruit others. As the sole UX researcher and designer, I needed to work quickly and begin designing as soon as possible.</p>
			</div>
			<img src="https://public-media.interaction-design.org/images/uploads/bc407d74dd91972a7370c0e22cfacc36.jpg" alt="" width="50%">
			<aside>Image from the Interaction Design Foundation</aside>
			<div class="centerize">
				<p>I found that the app had the biggest usability issues with regard to "User Control and Freedom", "Recognition Rather than Recall," and "Visibility of System Status."</p>
				<ul class="dots">
					<li><span class="bold">User Control and Freedom</span> means that users should have the freedom to undo, redo, and make mistakes and be able to recover from them. The app had no back buttons, and any mistakes users made meant that the user had to start from the beginning again.</li>
					<li><span class="bold">Recognition Rather than Recall</span> means that users should not be required to recall information. Instead, information should be displayed so users only need to recognize information. The app led users through a linear series of steps that require users to recall what they have already done.</li>
					<li><span class="bold">Visibility of System Status</span> means that the system should keep users updated with what is happening and what the user's status is. The app did not show users' progress through the many steps before the simulation.</li>
				</ul>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Wireframing</h3>
				<p>With information on the usability issues in the previous app, I sketched and wireframed screens. My goals were to:</p>
				<ul class="dots">
					<li>increase user control and freedom through the addition of back buttons</li>
					<li>decrease the number of steps involved where there is no system status and users need to recall where they are</li>
					<li>have a tool for communicating design ideas to our developer</li>
				</ul>
				<p>I designed a "home" area for each simulation so that instead of linearly doing the left eye then the right eye, users could have control over the order and see the progress of certain eyes as they inputted the blind spots for each eye. After creating the wireframes, I prototyped them using Marvel to illustrate interactions and flows.</p>
				<a href="img/eds-first-design.png" data-lightbox="eds" data-title="First digital wireframe">
					<img src="img/eds-first-design.png" width='90%' alt="first digital wireframe">
				</a>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Usability Testing</h3>
				<p>My work as a designer was not done without some usability testing to ensure that others could use the app. I needed feedback to improve my designs. Our advisor and team made the decision to do <span class="bold">testing on the actual app</span> instead of on my prototype because of development limitations. With only one developer, who was invested in debugging why the app was crashing and not invested in the front end, we wanted to test the interface of the actual app that the developer could build, not on the idealized version of the app that my prototype represented, which might never be realized fully by the developer. </p>
				<p>I handed my wireframes over to our developer, who developed the front end and sent me the app in its current state. I then recruited two people to complete five tasks to complete using the app. As they attempted the tasks, I asked them to think aloud to explain their interaction choices. I <span class="bold">observed</span> them and took notes, trying to stay in the background as much as possible and let them figure things out. However, occasionally, the app would crash and close because the implementation was not complete and I would have to intervene. At the end of the sessions, I did a brief <span class="bold">debriefing interview</span> with the user to hear their thoughts.</p>
				<a href="img/eds-usability-testing.jpg" data-lightbox="eds" data-title="Usability Test on Eye Disease Simulator">
					<img src="img/eds-usability-testing.jpg" width='70%' alt="usability test on eye disease simulator">
				</a>
				<p>Afterwards, I synthesized the behavior patterns I had been seeing, and wrote a report detailing my findings for my team. Some main findings were that:</p>
				<ul class="dots">
					<li>the pen size was too small, making for awkward and time-consuming drawing of blind spots</li>
					<li>there needed to be more confirmation dialogues. Most users did not know if they had successfully saved a simulation</li>
					<li>users did not know how to get to the drawing screen of the eye</li>
					<li>sizing and grouping of elements made users confused. The create simulation button was so large that people didn't notice other things on the screen, and the saved simulations were near the create button, making them seem more related than they were.</li>
				</ul>
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Iteration</h3>
				<p>I used these findings to drive my design decisions as I improved upon the app. Several of the issues brought up in the usability tests were because of discrepancies between the design and the implementation. For example, in my design, there were pencil icons near each eye to indicate that users could edit and draw the blind spots for an eye. In the app, these didn't exist because it was challenging to implement given the time constraints. Other findings from the usability tests were things that I could change in the design. For example, I added more confirmation dialogues during critical moments in the flow, such as when people are saving or deleting simulations.</p>
				<a href="img/eds-second-design.jpg" data-lightbox="eds" data-title="Confirmation dialogue in second design">
					<img src="img/eds-second-design.jpg" width='70%' alt="confirmation dialogue in second design">
				</a>
				<p>After sending our developer the new wireframes and prototypes, our developer made the front end changes and I did usability testing yet again with some users. Some of the findings were the same since certain parts of the interface had not been changed yet, but the rest of them were more specific and in-depth. We did two iterations of research - design - develop before the semester ended.</p>
				<a href="img/eds-iteration.jpg" data-lightbox="eds" data-title="Diagram of iteration">
					<img src="img/eds-iteration.jpg" width='70%' alt="diagram of iteration process">
				</a>
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Presentation Poster</h3>
				<p>Our advisor was the one who presented our work to our sponsors. For that presentation, he asked me to create the poster for him to use, which I was honored to do. My work was more visible and understandable to our stakeholders and sponsors than the code was.</p>
				<a href="img/eds-poster.jpg" data-lightbox="eds" data-title="Eye Disease Simulator Presentation Poster">
					<img src="img/eds-poster.jpg" width='100%' alt="eye disease simulator presentation poster">
				</a>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Lessons</h3>
				<p>This was a challenging project, but I am very happy to have been part of it! I got a glimpse into the world of working with people from other disciplines and understanding limitations. Some takeaways are:</p>
				<ul class="dots">
					<li>Not everybody knows or cares about UX and design. Advocate for UX by <span class="bold">learning to talk their talk</span>, whether that means bringing in research or drawing on their empathy as users themselves.</li>
					<li><span class="bold">Real-world limitations</span> will cramp your usual design (and research) process - and that's okay! Adapt.</li>
					<li>Expect to <span class="bold">communicate more</span> when working in multidisciplinary teams. You will often have to teach UX concepts and provide supplementary background information that you don't normally have to do in a team of other designers.</li>
				</ul>
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
