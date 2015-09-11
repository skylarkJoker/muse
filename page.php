<?php
  include 'header-main.php';
  if(is_page('art-gallery')){
    get_template_part('gallery/page', 'art-gallery');
  }
  else if(is_page('contact')){
    get_template_part('contact/page', 'contact');
  }
  include 'footer.php';
 ?>
