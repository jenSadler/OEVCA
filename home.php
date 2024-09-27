<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>


    <main>
      <p class="breadcrumbs"> &nbsp</p>
      <section class="hold-columns top-center-cols">
      <div class="left-column">
        <?php get_sidebar('home');?>
      </div>
      <div class="right-column">

        <?php
          $featured_array = array(
            'posts_per_page' => 1,
            'tag' => 'featured',
          );
          query_posts($featured_array);
          ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                  <article class="card titlecard">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
                  <div class="hold-article-text">
                  <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

                  <p ><?php the_excerpt() ?> <a href="<?php the_permalink(); ?>" class="read-more">Read More</a></p>
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

<section class="hold-columns top-center-cols">
    <div class="left-column" id="upcoming-events">
    <h2 class="mid-accent-bar">Upcoming Events</h2>
    <?php echo do_shortcode('[MEC id="551"]');?>
  </div>
      <div class="right-column ">

<h2 class="light-accent-bar" style="clear:both">Latest News and Initiatives</h2>
<div class="flexRow wrapIt">

            <?php
            query_posts( array(

          'posts_per_page' => 6,
          'category__not_in' => 22 ,
          'tag__not_in' => array(17)
      ) );
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



          <!-- Print a link to this category -->
        <a href="/our-work" title="News" class="more_button_light">More Initiatives</a>
</div>
<h2 class="dark-accent-bar" style="clear:both">Latest Administrative</h2>
<div class="flexRow wrapIt">

                <?php
                query_posts( array(
              'category_name'  => 'administrative',
              'posts_per_page' => 3,
              'tag__not_in' => array(17)
                ) );
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



              <?php
            // Get the ID of a given category
            $category_id = get_cat_ID( 'administrative' );

            // Get the URL of this category
            $category_link = get_category_link( $category_id );
            ?>

            <!-- Print a link to this category -->
          <a href="<?php echo esc_url( $category_link ); ?>" title="News" class="more_button_dark">Administration</a>
        </div>



    </div>
  </section>
    </main>

<?php get_footer(); ?>
