<?php include 'header-main.php'?>

    <div class="row">

      <div class="large-9 columns " role="content">

            <?php if(have_posts()):?>
              <h2>Search results for: <?php the_search_query(); ?></h2>
              <?php
              while(have_posts()) : the_post();
                get_template_part('content');
              endwhile;

              else:
                echo '<p>No content found</p>';
              endif;
            ?>

      </div>

      <?php get_sidebar( 'sidebar-1' ); ?>

    </div>
 <?php include 'footer.php'; ?>
