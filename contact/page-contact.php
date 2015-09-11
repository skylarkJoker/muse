    <div class="row">
      <div class="large-9 columns " role="content">
        <?php
              if(have_posts()):
                while(have_posts()) : the_post();?>
                <article class="card-article">
                  <div class="row content">
                    <div class="large-4 columns">
                      <div class="row">
                        <?php the_post_thumbnail('image_reg'); ?>
                      </div>
                      <div class="row desc">
                        <?php the_content(); ?>
                      </div>
                    </div>

                    <div class="large-8 columns">
                      <div class="row">
                        <div class="small-12 columns">
                          <ul class="social">
                            <li><a href="https://www.facebook.com/myonlymuseart"><i class="fi-social-facebook"></i></a></li>
                            <li><a href="https://twitter.com/MyOnlyMuse"><i class="fi-social-twitter"></i></a></li>
                            <li><a href="http://cherrythesweet.tumblr.com/"><i class="fi-social-tumblr"></i></a></li>
                            <li><a href=""><i class="fi-social-instagram"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div hidden>
                        <?php if(isset($_POST['submit'])){include 'contact.php';}?>
                      </div>
                      <form id="contact-form" data-abide method="post" action="<?php the_permalink(); ?>">
                        <div class="contact">
                          <div class="row">
                            <div class="small-10 columns">
                              <input required pattern="[a-zA-Z]+" name="userName" type="text" placeholder="Name" />
                              <small class="error">Name is required</small>
                            </div>
                          </div>
                          <div class="row">
                            <div class="small-10 columns">
                              <input required name="email" type="email" placeholder="Email" />
                              <small class="error">A valid email is required.</small>
                            </div>
                          </div>
                          <div class="row">
                            <div class="small-12 columns">
                              <textarea required rows="5" name="message" type="text" placeholder="Message"></textarea>
                              <small class="error">Please enter a message.</small>
                            </div>
                          </div>
                          <div class="row">
                            <div class="small-10 columns">
                              <input type="submit" class="button" name="submit" value="Send Message">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </article>

              <?php
              endwhile;

              else:
                echo '<p>No content found</p>';
              endif;
            ?>
      </div>
      <?php get_sidebar( 'sidebar-1' );?>
</div>
