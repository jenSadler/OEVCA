<html>
<head>
  <title>OEVCA</title>

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php
  $menu_name = 'main-nav-menu';

  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

    $menuItems = wp_get_nav_menu_items($menu->term_id);

    $logoid = "menu-item-" . $menuItems[0]->ID;

  }?>

  <script>



    function init(){
      console.log("in init");
      var toggleLink = document.getElementById("toggle-mobile-nav");

      toggleLink.addEventListener('click', toggleMenu, false);
      toggleLink.addEventListener('touchend', toggleMenu, false);


    }

    function toggleMenu(e) {
      var navMenu = document.getElementById("mainNav");
      e.preventDefault();
      navMenu.classList.toggle("menu-open");

    }



  </script>
  <?php wp_head(); ?>


</head>
 <body onload="init()">
  <?php
  wp_body_open();
  ?>
  <div class="not-scrollable">
  <div class="mainContainer">
    <header id="hold-header" class="released-menu menu-closed">
      <script>0</script>
      <nav class="topNav" id="topNav">


        <?php
        wp_nav_menu( array(
          'theme_location' => 'top-nav-list',
          'container_class' => 'top-nav-list' ) );
        ?>

        <?php
        wp_nav_menu( array(
          'theme_location' => 'top-nav-social',
          'container_class' => 'top-nav-social' ) );
        ?>

      </nav>

      <div class="main-nav-decoration"></div>
      <nav class="mainNav" id="mainNav">
          <?php
        wp_nav_menu( array(
          'theme_location' => 'main-nav-menu',
          'container_class' => 'main-nav-list' ) );
        ?>

        <a class="toggle-mobile-nav" id="toggle-mobile-nav" href="#"> <img src="<?php echo get_template_directory_uri();?>/imgs/icons-svg/icon-menu-lightest.svg"/></a>

      </nav>

      <div class="main-nav-submenu"></div>
    </header>
