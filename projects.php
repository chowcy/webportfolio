<html lang="en">
<?php $title='Projects'; include("head.php");?>
<?php $projects = true; include("header.php");?>
   <main id="main">
      <!-- Filter Controls -->
      <ul id="project-grid" class="uk-subnav">
         <li data-uk-filter=""><a href="">All Projects</a></li>
         <li data-uk-filter="filter-a"><a href="">Design</a></li>
         <li data-uk-filter="filter-b"><a href="">Development</a></li>
      </ul>
      <!-- Dynamic Grid -->
      <div data-uk-grid="{gutter: 10, controls: '#project-grid'}" class="uk-grid">
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Free Your Stuff</h3>
                  <h4>Interaction Design. Prototyping.</h4>
                  <div class="overlay-container">
                     <img src="img/freeyourstufflogo.jpg" alt="">
                     <a href="freeyourstuff.php" hreflang="en" target="_blank">
                       <div class="overlay">
                          <p>mobile app design to share community resources.</p>
                       </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Harman Consulting</h3>
                  <h4>UX Research. Needs Assessment.</h4>
                  <div class="overlay-container">
                     <img src="img/harman.jpg" alt="">
                     <a href="harman.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>usability research on an in-vehicle infotainment system.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>SmartVision</h3>
                  <h4>UX Design. Prototyping. App Dev.</h4>
                  <div class="overlay-container">
                     <img src="img/smartvision.jpg" alt="">
                     <a href="smartvision.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>mobile app design/dev for low-vision people.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Mobile Site Optimization</h3>
                  <h4>Responsive Web Design. CSS. </h4>
                  <div class="overlay-container">
                     <img src="img/newberry.jpg" alt="">
                     <a href="https://seelio.com/w/2wdn/the-newberry-library-development-office" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>responsive web redesign for Chicago's Newberry Library.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Graphic Design</h3>
                  <h4>Graphic Design. Typography.</h4>
                  <div class="overlay-container">
                     <img src="img/floral.jpg" alt="">
                     <a href="graphicdesign.php" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>Various graphic design samples. </p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Music Recommender</h3>
                  <h4>Python, APIs.</h4>
                  <div class="overlay-container">
                     <img src="img/music.jpg" alt="">
                     <a href="https://github.com/chowcy/MusicRecommender" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>recommends music using the Facebook and Spotify APIs. Click for code.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>openAIR Web Challenge</h3>
                  <h4>Web UX Design, HTML/CSS, PHP.</h4>
                  <div class="overlay-container">
                     <img src="img/openair.png" alt="">
                     <div class="overlay">
                        <p>accessibility redesign of SummitIDG's website.</p>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Ann Arbor Data Dive</h3>
                  <h4>Python, Data Retrieval.</h4>
                  <div class="overlay-container">
                     <img src="img/datadive.jpg" alt="">
                     <a href="https://github.com/chowcy/GLOSWaterTempDataBuoy" hreflang="en" target="_blank">
                        <div class="overlay">
                           <p>gets water temperature data for Great Lakes buoys. Click for code.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-1-3" data-grid-prepared="true" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Drupal Music Database</h3>
                  <h4>Drupal, PHP.</h4>
                  <div class="overlay-container">
                     <img src="img/musicdatabase.png" alt="">
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
