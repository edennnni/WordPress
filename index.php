<?php get_header() ?>

  <div id="content"  class="site-content">
   <div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>Blog</h1>
        <div class="container">
            <div class="blog-items">
            <?php
               if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            ?>
            <div class="wp-devs-pagination">
                <div class-="pages new">
                    <?php previous_posts_link ("<< newer posts") ;?>
                </div>

                <div class="pages old">
                <?php next_posts_link("older posts") ;?>
                </div> 

                </div>
                <?php
                else: ?>
                <p>nothing yet to be displayed</p>
                <div?php endif; ?>
                </div>
                <?php getsidebar();?>
            </div>
            </div>
          </div>
        </main>
      </div>
    </div>
<?php get_footer() ?>