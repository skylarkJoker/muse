<?php wp_footer();?>
<div class="footer-articles">
  <div class="row">
    <div class="large-4 columns">
      <?php dynamic_sidebar('footer-1'); ?>
    </div>
    <div class="large-4 columns">
      <?php dynamic_sidebar('footer-2'); ?>
    </div>
    <div class="large-4 columns">
      <?php dynamic_sidebar('footer-3'); ?>
    </div>

  </div>
</div>

<footer class="row">
  <div class="large-12 columns">
    <div class="row">
      <div class="large-12 columns">
        <p><?php bloginfo('name');?>-&copy <?php echo date('Y');?></p>
        <p>Designed by Joey</p>
      </div>
    </div>
  </div>
</footer>

</body>

</html>
