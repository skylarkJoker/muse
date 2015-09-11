<article class="card-article">
    <div class="row content">
    <div class="large-4 columns">
      <div class="row">
        <?php the_post_thumbnail('small-thumbnail'); ?>
        <h3 class="article-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
      </div>
      <div class="row">
        <h6 class="publish-info">Written by <a href="#"><?php the_author();?></a>
          <br>on <?php the_time('F j, Y');?></h6>

      </div>
    </div>

    <div class="large-8 columns">
      <?php
        if(is_single()){
          the_content();
        }
        else {
          # code...?>
          <p><?php echo get_the_excerpt()?>
            <a href="<?php the_permalink(); ?>">Read more &raquo;</a>
          </p>
          <?php
        }

        $categories = get_the_category();
        $seperator = ", ";
        $output = 'Categories: ';

        if($categories){
          foreach($categories as $category){
            $output .= '<a href="' . get_category_link($category->term_id) .'">'.$category->cat_name .'</a>' .$seperator;
          }

          echo trim($output, $seperator);
        }
       ?>
    </div>
  </div>
</article>
