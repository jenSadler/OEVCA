<?php
/** no direct access **/
defined('MECEXEC') or die();

/**
 * The Template for displaying events archives
 *
 * @author Webnus <info@webnus.biz>
 * @package MEC/Templates
 * @version 1.0.0
 */
get_header('MEC'); ?>

<main id="news-events">
  <div class="breadcrumbs"> <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
    ?></div>
  <section class="hold-columns top-center-cols">


    <div class="left-column">

      <?php get_sidebar("bulletin");?>
    </div>

    <div class="right-column">

      <article id="<?php echo apply_filters('mec_archive_page_html_id', 'main-content'); ?>" class="<?php echo apply_filters('mec_archive_page_html_class', 'mec-container'); ?> card titlecard">
          <?php do_action('mec_before_main_content'); ?>

          <?php if(have_posts()): ?>

              <?php do_action('mec_before_events_loop'); ?>

                  <?php while(have_posts()): the_post(); $title = apply_filters('mec_archive_title', get_the_title()); ?>
                    <div class="hold-article-text">
                    <h1 class="post-title">Events</h1>

                      <?php the_content(); ?>
                    </div>
                  <?php break; /** Only one post should be shown **/ endwhile; // end of the loop. ?>

              <?php do_action('mec_after_events_loop'); ?>

          <?php endif; ?>
      </article>

      <?php do_action('mec_after_main_content'); ?>

  </div>


</section>


    </main>

<?php get_footer('MEC');
