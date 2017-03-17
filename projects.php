<html lang="en">
<?php $title='Projects'; include("head.php");?> 
<?php $projects = true; include("header.php");?> 
	<main id="main">
		<div class="container">

			<div class ="row">
				<div class="col-xs-12">
						<h3>Projects</h3>
						<p style="text-align:center;">Check out my Programming, Design, and Research Projects by clicking on them! (For keyboard users, the projects should be tabbable as well.)</p>
				</div>
			</div>

			<div class="row">

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>Free Your Stuff</h3>
						<h4>Research.</h4>
						<div class="img-wrapper"><img src="img/fys.png" alt=""></div>
						<p>resource collection for a free-giving community.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);"  onblur="normal(this);">
						<h3>Music Recommender</h3>
						<h4>Python, APIs.</h4>
						<div class="img-wrapper"><img src="img/music.jpg" alt=""></div>
						<p>recommends music using the Facebook and Spotify APIs. <a href="https://github.com/chowcy/MusicRecommender" hreflang="en" target="_blank">See the code here.</a></p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>2016 openAIR Accessibility Challenge</h3>
						<h4>Web Design, UX Design, HTML/CSS, PHP.</h4>
						<div class="img-wrapper"><img src="img/openair.png" alt=""></div>
						<p>accessibility redesign of SummitIDG's website. In collaboration with Wei Cai, Shuang Liu, Tianyi Liu, Kaiwen Sun, Chen Wang.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>2016 Data Dive</h3>
						<h4>Python, Data Retrieval.</h4>
						<div class="img-wrapper"><img src="img/datadive.jpg" alt=""></div>
						<p>gets water temperature data for Great Lakes buoys. In collaboration with Vanessa Rychlinski.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>Conway's Game of Life</h3>
						<h4>HTML/CSS, JavaScript, Graphics.</h4>
						<div class="img-wrapper"><img src="img/gol.jpg" alt=""></div>
						<p>custom, colored Game of Life simulation. In collaboration with Dhananjaya Premawardena, Sam Dunham.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>RGB Consulting</h3>
						<h4>User Research, Qualitative Research, Contextual Inquiry, Consulting.</h4>
						<div class="img-wrapper"><img src="img/rgb.jpg" alt=""></div>
						<p>recommended solutions for a non-profit environmental organization after conducting contextual research. In collaboration with Janet Li, Tianyi Liu, Paul Suvansupa.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this);" onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);" onblur="normal(this);">
						<h3>2016 InfoGamers Design Jam</h3>
						<h4>Design</h4>
						<div class="img-wrapper"><img src="img/infogamers.jpg" alt=""></div>
						<p>a free-to-play design of Just Dance. First/Second Place. In collaboration with Wei Cai, Ruta Gokhale, Aakanksha Parameshwar, Olivia Patercsak.</p>
					</section>
				</div>

				<div class="col-xs-12 col-sm-6 col-lg-4">
					<section class="project" onclick="displayContent(this); "onmouseover="hover(this);" onmouseout="normal(this);" onkeypress="displayContent(this);" tabindex="0" onfocus="hover(this);"  onblur="normal(this);">
						<h3>UMSI Orientation: Flint Water Crisis</h3>
						<h4>Design</h4>
						<div class="img-wrapper"><img src="img/orientation.jpg" alt=""></div>
						<p>a campaign design to sustain donations. In collaboration with Amy Chen, Gary Cheung, Jasmine Duan, Lauren Sheridan.</p>
					</section>
				</div>

			</div>
		</div>
	</main>
	<?php include("footer.php");?> 
</body>
</html>