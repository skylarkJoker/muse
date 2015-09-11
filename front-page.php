<?php include 'header-main.php';?>

    <div class="row">
      <div class="large-12 columns " role="content">
        <?php
          if(have_posts()):
            while(have_posts()) : the_post();?>
              <div class="row">
                <?php the_content(); ?>
              </div>

          <?php endwhile;

          else:
            echo '<p>No content found</p>';
          endif;
        ?>
        </div>
    </div>

    <div class="row">
      <h2 class="featured-article-heading">Featured</h2>
      <hr>
        <?php
          $lifestylePosts = new WP_Query('cat=6&posts_per_page=2');

          if($lifestylePosts->have_posts()):
            while($lifestylePosts->have_posts()) : $lifestylePosts->the_post();?>
              <div class="large-6 columns" role="content">
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'banner');

                ?>
                <a href="<?php the_permalink();?>">
                  <div class="feature-articles" style="background-image: url(<?php echo $image[0];?>)">
                      <div class="sub-block">
                        <h4 class="featured-article-heading"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                      </div>
                  </div>
                </a>
              </div>
          <?php endwhile;
          else:
            echo '<p>No content found</p>';
          endif;
          wp_reset_postdata();
        ?>
      </div>


 <?php include 'footer.php'; ?>
