<!DOCTYPE html>
<html lang="en">
	<?php $title='Free Your Stuff'; include("head.php");?>
	<?php $projects = true; include("header.php");?>
	<main id="main">
		<section class="portfolio-section portfolio-overview">
			<div class="centerize">
				<h3>Free Your Stuff</h3>
				<h4>UX Design.</h4>
				<div class="row context">
					<div class="col-xs-12 col-md-12 col-lg-6">
						<h4>Overview</h4>
						<p>There is a lot of waste in college towns because many students move in and out every year.
							Every Spring, usable furniture is found sitting in dumpster alleys, and
							every Fall, students rush to find items to fill their empty apartments. This is wasteful and unnecessary!
							I designed and prototyped a mobile app to connect people who need stuff
							with people who have stuff to facilitate resource
							sharing and reduce waste in the community. The name Free Your Stuff comes from a cultural movement I encountered in Germany
							aimed to reduce waste and decrease needless consumerism.</p>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-6">
						<a href="img/fys.jpg" data-lightbox="fys" data-title="Mid-fi Digital Prototype">
							<img src="img/fys.jpg" width='50%' alt="mid-fi digital prototype">
						</a>
					</div>
				</div>
				<div class="row context">
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Role</h4>
						<p>UX and Interaction Designer</p>
						<h4>Time Frame</h4>
						<p>Jan 2017 - Apr 2017</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Context</h4>
						<p>Course Project</p>
						<h4>Tools</h4>
						<p>Paper and pencil, Figma, Marvel</p>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-4">
						<h4>Skills</h4>
						<p>Interaction Design, Sketching, Storyboarding, Wireframing, Prototyping</p>
					</div>
				</div>
			</div>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Competitive Analysis</h3>
				<p>Before ideating, I wanted to see how the problem of unnecessary waste
					was currently being handled. I ran a competitive analysis, thinking about both digital-based (Facebook, Craigslist, Freecycle)
					and physical-based systems (thrift stores), as well as an analogous system (Couchsurfing), which focused on
					a different problem but had similar qualities. I compared these systems by several factors:</p>
					<ul class="dots">
						<li>price/cost</li>
						<li>trust/safety</li>
						<li>whether it helps people in need</li>
					</ul>
					<p>Forging connections with potential strangers can be fraught with danger, and users
					in need likely have a low budget, so I wanted to make sure my solution was trustworthy and low-cost, but also addressed users' needs.</p>
				<p>I found that thrift stores and selling on Facebook seemed the most trustworthy because in the former case, strangers don't need to meet, and in the latter,
					 users can view information about each other before deciding to meet. Freecycle was the most low-cost because items were given away for free, which removed
					  one of the significant barriers to exchanging items.
					</p>
			</div>
			<a href="img/competitiveanalysis.jpg" data-lightbox="fys" data-title="Competitve Analysis Chart">
				<img src="img/competitiveanalysis.jpg" width='50%' alt="competitive analysis chart">
			</a>
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>Personas</h3>
				<p>UX Design is not complete without considering users. To help with the design process, I created 5 personas based on my observations from following several Facebook Marketplace groups, including several that only exchanged free items. The personas
					I created represented different potential users of my design:</p>
				<ul class="dots">
					<li>a social worker</li>
					<li>an international student</li>
					<li>an undergraduate student living in a dorm</li>
					<li>a student living in a co-op</li>
					<li>a retired man in a nursing home</li>
				</ul>
 				<p>The last persona was an anti-persona, which described the users I was not designing for. These personas helped me step through scenarios as different personas to better understand how my solution
					 could be designed and used by the user population.</p>
			</div>
			<a href="img/personas.jpg" data-lightbox="fys" data-title="Collage of Personas Created">
			</a>
			<img src="img/personas.jpg" width='50%' alt="some personas">
		</section>
		<section class="portfolio-section">
			<div class="centerize">
				<h3>From Ideation to Decision</h3>
				<p>From the comparative analysis, I saw a diverse set of solutions, and had identified
				some advantages and disadvantages of each one. From the personas, I knew what kinds of users to design for. With this knowledge, I <span class="bold">ideated</span>: I brainstormed
				and <span class="bold">sketched</span> eight potential solutions, ranging from a free drop-off, drop-in location to a mobile app that connected "buyers" and "sellers."
				 The focus was not on high-fidelity
				mockups, but on pencil sketches on paper that represented general ideas that could be expanded on later.</p>
				<p>After my first eight initial sketches, I fleshed them out and sketched <span class="bold">user stories</span>. My goal was to think through a scenario for each solution. What steps does a user take to get an item they need?
				What about a user that is trying to get rid of an item? What is the context, the environment, and the interface like?
				</p>
				<p>After much ideation, it was time to narrow down and make a <span class="bold">decision</span> on which solution I would prototype and present. One of the <span class="bold">limitations</span> of this project was
					 that the course required us to select a digital solution, preferrably a web or mobile app interface,
					so even though I had come up with several non-digital solutions, I chose to create an app because of the course requirements. Without this limitation,
					 I would have conducted more user research, such as contextual interviews and surveys, to learn more about users' needs and limitations, and my design solution would have been based on my findings.</p>
			</div>
			<a href="img/582sketches.jpg" data-lightbox="fys" data-title="First round of brainstorming sketches">
				<img src="img/582sketches.jpg" width='50%' alt="brainstorming sketches">
			</a>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Paper Prototype</h3>
				<p>After deciding to design a mobile app, it was time to consider the <span class="bold">information architecture</span> and the <span class="bold">interaction design</span>. I made a paper prototype to
					illustrate the initial interactions for my app. This was admittedly very challenging to me because it was the first time I had been asked to design
					an interface from scratch, so after completing my prototype, I recruited users to "test" it to gain <span class="bold">feedback</span> for my next iteration. I had users try to
					play with the paper prototype while I sat next to them and moved the paper pieces around to show them what would happen if they tapped certain parts.
					If certain parts weren't prototyped yet, I would verbally tell them what the result of a certain interaction would be.</p>
				<p>This <span class="bold">user testing</span> was critical to my process! I learned:</p>
				<ul class="dots">
					<li>I was missing back buttons. (Yikes!)</li>
					<li>the home page, which was a static navigation page with 4 options, was redundant and confusing to users because every other page had a fixed bottom navigation.</li>
					<li>I needed to rethink the rating system. I wanted to make sure my app was trustworthy, so I had a rating system for each user like in Uber or AirBnb where trust is vital. However, because the app simply allowed users to message each other and
						arrange their own meeting time and pick up, the app would not know when and if a transaction
						had taken place, so they could not be prompted to rate each other after a transaction.</li>
				</ul>

				<p>After this crucial feedback from users, I made the following <span class="bold">design decisions</span>:</p>
				<ul class="dots">
					<li>Add back buttons and label the page title at the top so people knew where they were and could navigate back.</li>
					<li>Repurpose the home screen to be a feed showing items available in the area, following design patterns in homepages.</li>
					<li>Introduce a "request" step to the exchange process, similar to that in AirBnB, where lodgers “request” to reserve a space and the
						hosts confirm. Having a reservation system would help other users know the availability status of an item. The app would also know when a transaction took place, so it could
						prompt users to rate each other, thus establishing a rating system for users.</li>
				</ul>
				<div class="embed-size margin0auto">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PHhft_YIWkQ" frameborder="0" allowfullscreen>Free Your Stuff Paper Prototype</iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>First Digital Prototype</h3>
				<p>Using the feedback from my paper prototype, I created a <span class="bold">mid-to-high fi digital prototype</span> that I then tested with three users. I found several issues: </p>
				<ul class="dots">
					<li>Wording: Both users had a different
						expectation of what “See Availability” meant in the item listing. I had a clock
						icon to show that this had to do with pick-up time availability, but both users expected it
						to show them whether the item was still available to be given away, which makes sense.
						Based on this, I decided to change the wording.</li>
					<li>Icons: There were some problems with the icons in the navigation bar. Although the search and messages icons were intuitive, the
						other two were less so. I had an icon of a handshake representing "Exchanges, which I imagined
						would be where people can view their requested items, see their own listings, and
						receive notifications about requests. Because the handshake icon is not intuitive, one
						user suggested making small labels for the navigation. The other icon on the bottom
						navigation is the map icon, but both users deemed it unnecessary. Although a map
						interface is nice, I realized it could be integrated into the browse feature and removed from the bottom navigation.</li>
					<li>ISO users: I had not designed for how users in need can make a post about items they were looking for, which should show up on the feed and
						search results. One user pointed out that those posts would probably not have a picture,
						so using that space to write “ISO” (in search of) could be a way to indicate that this an
						ISO post and not a “giving away” post.</li>
				</ul>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Revised Digital Prototype</h3>
				<p>After two more iterations and more user feedback, I eventually produced a hi-fi digital prototype of my app.</p>
				<div class="embed-size margin0auto">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/L8mPY4RmsSs?ecver=1" allowfullscreen>Free Your Stuff Digital Prototype</iframe>
					</div>
				</div>
			</div>
		</section>

		<section class="portfolio-section">
			<div class="centerize">
				<h3>Lessons</h3>
				<p>This was the first time I had prototyped an interface in detail, and I learned a lot! More specifically:</p>
				<ul class="dots">
					<li>Look at other applications to find <span class="bold">design standards</span> (ex. what does a home page look like) when designing from scratch.</li>
					<li>Never forget the <span class="bold">back button</span>!</li>
					<li>Test test test test test! I gained so much valuable <span class="bold">feedback</span> by talking to users trying to use my app.</li>
					<li>Hi-fi prototypes are time-consuming, so spend more time with <span class="bold">lower fidelity prototypes</span> to get the biggest usability issues out of the way efficiently.</li>
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
