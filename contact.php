<?php
/*
Template Name: Contact
*/ ?>
<?php get_header(); ?>


    <main id="contact">
      <p class="breadcrumbs"><div class="breadcrumbs"> <?php
      if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
        ?></div></p>
      <section class="hold-columns top-center-cols">
      <div class="left-column">


        <?php get_sidebar( 'contact' ); ?>
      </div>
      <div class="right-column">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                  <article class="card titlecard">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
                  <div class="hold-article-text">

                    <h1 class="post-title"><?php the_title(); ?></h1>

                  <p ><?php the_content(); ?> </p>
                  <div class="hold-date">
                    <span>
                      <?php the_date( 'l F j, Y' ); ?>
                    </span>
                  </div>
                </div>


              </article>

            <?php endwhile; else: ?>
              <article class="card titlecard">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/demo-1-banner.jpg" alt="Old East Village Community Association">
                <div class="hold-article-text">
                  <h2>Old East Village Community Association</h2>
                  <p>Welcome! Use the links above to learn about community news and events, or to see what we are working with as a community association</p>
                </div>

              </article>

            <?php endif;?>

      </div>
    </section>



    </main>

<?php get_footer(); ?>
