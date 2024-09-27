<?php
/** no direct access **/
defined('MECEXEC') or die();

/**
 * The Template for displaying all single events
 *
 * @author Webnus <info@webnus.biz>
 * @package MEC/Templates
 * @version 1.0.0
 */
get_header(); ?>

<main id="single_events">
  <p class="breadcrumbs"><div class="breadcrumbs"> <?php
  if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
    ?></div></p>
    <section class="hold-columns top-center-cols">
  <div class="left-column sidebar">

    <?php
    $single_e = new MEC_skin_single();
    $single_event_main = $single_e->get_event_mec(get_the_ID());
    $single_event_obj = $single_event_main[0];
    ?>

    <h3 class="widget-title">Start Date</h3>
    <?php $evs_date = date_create( get_post_meta( get_the_ID(), 'mec_start_date', true));?>
  <?php $evs_hour =  	get_post_meta( get_the_ID(), 'mec_start_time_hour', true);?>
<?php $evs_min =	get_post_meta( get_the_ID(), 'mec_start_time_minutes', true);?>
<?php $evs_ampm = get_post_meta( get_the_ID(), 'mec_start_time_ampm', true);?>
<?php
  $str_length = 2;

    // hardcoded left padding if number < $str_length
    $formatMinStart = substr("00{$evs_min}", -$str_length);
?>
    <p>  <?php echo date_format($evs_date,"l F j, Y");?> at <?php echo $evs_hour; ?>:<?php echo $formatMinStart;?> <?php echo $evs_ampm; ?></p>
      <h3 class="widget-title">End Date</h3>
      <?php $eve_date = date_create( get_post_meta( get_the_ID(), 'mec_end_date', true)); ?>
      <?php $eve_hour =  	get_post_meta( get_the_ID(), 'mec_end_time_hour', true);?>
    <?php $eve_min =	get_post_meta( get_the_ID(), 'mec_end_time_minutes', true);
    $formatMinEnd = substr("00{$evs_min}", -$str_length);?>
    <?php $eve_ampm = get_post_meta( get_the_ID(), 'mec_end_time_ampm', true);?>

    <p><?php  echo date_format($eve_date,"l F j, Y");?> at <?php echo $eve_hour; ?>:<?php echo $formatMinEnd; ?> <?php echo $eve_ampm; ?></p>
      <h3 class="widget-title">Cost</h3>
      <p><?php echo get_post_meta( get_the_ID(), 'mec_cost', true );?></p>
      <?php echo $single_e->display_social_widget($single_event_obj);?>

  </div>
  <div class="right-column">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article class="card titlecard">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
              <div class="hold-article-text">

                <h1 class="post-title"><?php the_title(); ?></h1>

              <p ><?php the_content(); ?> </p>
              <h2>Location</h2>
              <?php $single_e->display_location_widget($single_event_obj); ?>
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

<?php get_footer();?>
