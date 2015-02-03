



      <?php get_header(); ?>

      <div id="topSection">

      </div>

      <div id="stripes">

      </div>



    <div class="container">


       <div class="row col">

          <div class="leftbar col-sm-2">
            <div class="col-sm-6 arrow">
                  <img src="./wp-content/themes/sun/img_src/left-arrow.png">

            </div>
            <div class="col-sm-6  small-sun">
                <img src="./wp-content/themes/sun/img_src/small-sun.png">
            </div>

          </div>

          <div class="article  col-sm-7">
              <?php $the_query = new WP_Query( 'showposts=1' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                  <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

                  <?php the_content(__('(more…)')); ?>

              <?php endwhile;?>


          </div>


          <div class="col-sm-3 rightbar">
              <div class="row">
                  <div class="col-sm-4 share">
                      <!-- share image -->
                      <img src="./wp-content/themes/sun/img_src/share.png">
                  </div>
                  <div class="col-sm-offset-4 col-sm-4 arrow">
                      <img src="./wp-content/themes/sun/img_src/right-arrow.png">
                  </div>
              </div>
         </div>



      </div>

      <div class="row">

              <?php get_footer(); ?>


      </div>



    </div>





      <!-- Main hero unit for a primary marketing message or call to action 
      <!--
      <div class="hero-unit">
        <h1>Solar Printer in the Egyptian Desert</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -

      <div class="row">
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>-->





