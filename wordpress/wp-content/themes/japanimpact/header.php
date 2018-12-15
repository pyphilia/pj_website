
<header>

  <div class="poster">

<!--
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Japan Impact</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown"> -->

      <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">

       <!-- Brand and toggle get grouped for better mobile display -->
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <!-- <a class="navbar-brand" href="#">Japan Impact</a> -->

          <?php

         wp_nav_menu( array(
	'theme_location'  => 'header-menu',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'collapse navbar-collapse',
	'container_id'    => 'bs-example-navbar-collapse-1',
	'menu_class'      => 'navbar-nav mr-auto',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker(),
) );


        ?>
        
        <!-- <ul id="languages"><?php pll_the_languages();?></ul> -->

      </nav>
        <script type="text/javascript">
          // $(".sub-menu").hide();
          // $("li").on("mouseover", function(e){
          //   e.preventDefault();
          //   $(this).find("ul").toggle();
          // });
        </script>
    <!-- </div>
  </nav> -->
  <div id="ji_header">

    <img alt="header" src="<?php header_image(); ?>"/>

  </div>
</div>
<div id="logo">
  <img src="https://japan-impact.ch/wp-content/uploads/2018/09/jilogo_nohead-small.png" alt="logo"/>
</div>

</header>
