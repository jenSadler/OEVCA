<?php
/*
Template Name: Contact
*/ ?>
<?php get_header(); ?>


    <main id="single">
      <p class="breadcrumbs"><div class="breadcrumbs"> <?php
      if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
        ?></div></p>
      <section class="hold-columns top-center-cols">

      <div class="full-width">


                  <article class="card titlecard">
                  <img src="<?php echo get_template_directory_uri() ?>/imgs/banners/oev-map.png"/>
                  <div class="hold-article-text">

                    <h1 class="post-title">You're Off the Map!</h1>

                  <p >You seem to be lost - why don't you try checking out our <a href="<?php echo get_home_url(); ?>">Home Page</a></p>
                </div>


              </article>

      </div>
    </section>



      <div class="full-width ">
        <h2 class="mid-accent-bar">Latest News, Events, and Initiatives</h2>
        <div class="flexRow">
          <?php

          $top_3_array = array(
            'posts_per_page' => 3,
            'tag__not_in' => array(17)
          );
          query_posts($top_3_array);
          ?>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="card three-to-page">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail-small') ?></a>
              <div class="hold-article-text">
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

              <p ><?php the_excerpt() ?> </p>
            </div>
            <div class="hold-date">
              <span>
                <?php the_date( 'l F j, Y' ); ?>
              </span>
            </div>
            </article>

          <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>


      </div>
    </div>

    </main>

<?php get_footer(); ?>
