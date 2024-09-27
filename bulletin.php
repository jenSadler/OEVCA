<?php /* Template Name: Bulletin */ ?>
<?php get_header(); ?>

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


    <h2 class="light-accent-bar">Latest News</h2>
    <div class="flexRow wrapIt">
      <?php
      $newsCat = get_category_by_slug('news')->term_id;
      $news = array(
        'posts_per_page' => 3,
        'cat' => $newsCat
      );
      query_posts($news);
      ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="card three-to-page">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
        <div class="hold-article-details">
          <p class="article-author">
            <strong>Author:</strong> <?php the_author();?>
          </p>
          <p class="article-date">
            <strong>Date: </strong><?php the_date( 'l F j, Y' ); ?>
          </p>
        </div>
        <div class="hold-article-text">

          <a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>

        <p ><?php the_excerpt(); ?> </p>

      </div>

    </article>
  <?php endwhile; else: ?>
    <p><?php _e('Sorry, There are not any new posts'); ?></p>
  <?php endif; ?>

    </div>
    <p><a href="<?php echo esc_url( get_category_link($newsCat)); ?>" class="more_button_light"> More News </a></p>

  </div>
</section>
  <section class="hold-columns top-center-cols">


  <div class="left-column">

    <h2 class="mid-accent-bar">Upcoming Events</h2>
    <?php echo do_shortcode('[MEC id="551"]');?>




  </div>

  <div class="right-column">

    <h2 class="dark-accent-bar">Community Calendar</h2>
    <?php echo do_shortcode('[MEC id="543"]');?>

  </div>


</section>



</main>

    </main>

<?php get_footer(); ?>
