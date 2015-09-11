<div class="large-9 large-centered columns sticky menu">
  <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
    <ul class="title-area">
      <li class="name">

      </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon">
        <a href="#">
          <span>Menu</span>
        </a>
      </li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <?php display_primary_menu(); ?>


      <ul class="right">
        <li class="menu-item"><a href="https://www.facebook.com/myonlymuseart"><i class="fi-social-facebook"></i></a></li>
        <li class="menu-item"><a href="https://twitter.com/MyOnlyMuse"><i class="fi-social-twitter"></i></a></li>
        <li class="menu-item"><a href="http://cherrythesweet.tumblr.com/"><i class="fi-social-tumblr"></i></a></li>
        <li class="menu-item"><a href=""><i class="fi-social-instagram"></i></a></li>
        <li class="has-form">
          <?php get_search_form();?>
        </li>
      </ul>
    </section>
  </nav>
</div>
