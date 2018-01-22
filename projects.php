<html lang="en">
<?php $title='Projects'; include("head.php");?>
<?php $projects = true; include("header.php");?>
   <main id="main">
      <!-- Filter Controls -->
         <ul id="project-grid" class="uk-subnav uk-subnav-pill">
            <li data-uk-filter="" class="uk-active"><a href="">All Projects</a></li>
            <li data-uk-filter="filter-a"><a href="">Design</a></li>
            <li data-uk-filter="filter-b"><a href="">Development</a></li>
         </ul>
      <!-- Dynamic Grid -->
      <div data-uk-grid="{gutter: 10, controls: '#project-grid'}" class="uk-grid">
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Free Your Stuff</h3>
                  <h4>UX Design. Interaction Design.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-freeyourstuff.jpg" alt="">
                     <a href="freeyourstuff.php" hreflang="en" target="_blank">
                       <div class="overlay">
                          <p>mobile app design to share community resources.</p>
                       </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Harman Infotainment</h3>
                  <h4>UX Research. Consulting.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-harman.jpg" alt="">
                     <a href="harman.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>usability research on an in-vehicle infotainment system.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>SmartVision</h3>
                  <h4>UX Design. UX Research. </h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-smartvision.jpg" alt="">
                     <a href="smartvision.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>mobile app design/dev for low-vision people.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Mobile Site Optimization</h3>
                  <h4>Responsive Web Design. HTML/CSS. </h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-newberry.jpg" alt="">
                     <a href="https://seelio.com/w/2wdn/the-newberry-library-development-office" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>responsive web redesign for Chicago's Newberry Library. Click to see Seelio exhibit.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Graphic Design</h3>
                  <h4>Graphic Design. Typography.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-floral.jpg" alt="">
                     <a href="graphicdesign.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>Various graphic design samples. </p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Music Recommender</h3>
                  <h4>Python, APIs.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-musicrec.jpg" alt="">
                     <a href="https://github.com/chowcy/MusicRecommender" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>recommends music using the Facebook and Spotify APIs. Click for code on Github.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>openAIR Web Challenge</h3>
                  <h4>Web Design, HTML/CSS, PHP.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-openair.jpg" alt="">
                     <a href="http://acce.knowbility.org.php56-11.dfw3-2.websitetestlink.com/" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>accessibility redesign of SummitIDG's website. Click to view the test site.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Ann Arbor Data Dive</h3>
                  <h4>Python, Data Retrieval.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-datadive.jpg" alt="">
                     <a href="https://github.com/chowcy/GLOSWaterTempDataBuoy" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>gets water temperature data for Great Lakes buoys. Click for code on Github.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Drupal Music Database</h3>
                  <h4>Drupal, PHP.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-musicdatabase.jpg" alt="">
                     <a href="https://chowcymu.sites.uofmhosting.net" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>lets users browse music. Click to view site.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
            <!-- <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-a,filter-b"><div class="uk-panel-box">Design and Development</div></div> -->
      </div>
   </main>
<?php include("footer.php");?>
</body>
</html>
