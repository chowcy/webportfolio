<!DOCTYPE html>
<html lang="en">
<?php $title='Projects'; include("head.php");?>
<?php $projects = true; include("header.php");?>
   <main id="main">
      <!-- Filter Controls -->
         <ul id="project-grid" class="uk-subnav uk-subnav-pill">
            <li data-uk-filter="" class="uk-active"><a href="">All Projects</a></li>
            <li data-uk-filter="filter-a"><a href="">Design</a></li>
            <li data-uk-filter="filter-b"><a href="">Research</a></li>
         </ul>
      <!-- Dynamic Grid -->
      <div data-uk-grid="{gutter: 10, controls: '#project-grid'}" class="uk-grid">
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a, filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Eye Disease Simulator</h3>
                  <h4>UX Research. UX Design</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-eds.jpg" alt="">
                     <a href="eyediseasesimulator.php" hreflang="en">
                       <div class="overlay">
                          <p>mobile VR app that simulates eye diseases.</p>
                       </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Free Your Stuff</h3>
                  <h4>UX Design.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-fys.jpg" alt="">
                     <a href="freeyourstuff.php" hreflang="en">
                       <div class="overlay">
                          <p>mobile app design to share community resources.</p>
                       </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>Harman Infotainment</h3>
                  <h4>UX Research. Consulting.</h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-harman.jpg" alt="">
                     <a href="harman.php" hreflang="en">
                        <div class="overlay">
                           <p>usability research on an in-vehicle infotainment system.</p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
         <div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1" data-uk-filter="filter-a,filter-b">
            <div class="uk-panel-box">
               <section class="project">
                  <h3>SmartVision</h3>
                  <h4>UX Design. UX Research. </h4>
                  <div class="overlay-container">
                     <img class="img-responsive" src="img/tile-smartvision.jpg" alt="">
                     <a href="smartvision.php" hreflang="en">
                        <div class="overlay">
                           <p>mobile app design/dev for low-vision people.</p>
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
                     <a href="graphicdesign.php" hreflang="en">
                        <div class="overlay">
                           <p>Various graphic design samples. </p>
                        </div>
                     </a>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </main>
<?php include("footer.php");?>
</body>
</html>
