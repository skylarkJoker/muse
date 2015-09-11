<?php include 'header-main.php'; ?>

    <div class="row">
    <div class="large-9 columns " role="content">

          <?php
            if(have_posts()):
              while(have_posts()) : the_post();
                get_template_part('content');
            endwhile;

            else:
              echo '<p>No content found</p>';
            endif;
          ?>
    </div>
      <?php
        get_sidebar( 'sidebar-1' );
      ?>

    </div>
 <?php include 'footer.php'; ?>
