<div class="row">
      <div class="large-12 columns " role="content">
        <div class="row">
          <div class="large-12 columns">
            <h1 class="sub-heading">Art</h1>
          </div>
        </div>
        <?php
              if(have_posts()):
                while(have_posts()) : the_post();?>

                  <div class="gallery">
                    <?php echo get_the_content(); ?>
                  </div>

            <?php  endwhile;

              else:
                echo '<p>No content found</p>';
              endif;
            ?>
      </div>
</div>
