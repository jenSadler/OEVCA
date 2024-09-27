<?php
/*
Template Name: Category
*/ ?>

<?php get_header(); ?>


    <main id="single">
      <div class="breadcrumbs"> <?php
      if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
        ?></div>
      <section class="hold-columns top-center-cols">
      <div class="left-column">

			<div class="location-box">

					<?php echo category_description( $mainCatID ); ?>
			</div>

      <?php get_sidebar()?>


		  </div>
      <div class="right-column">



            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <article class="card titlecard" id = "<?php the_id();?>">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'oev-thumbnail') ?></a>
          <div class="hold-article-text">

            <a href="<?php the_permalink(); ?>"><h1 class="post-title  mid-accent-bar"><?php the_title(); ?></h1></a>

          <p ><?php the_content(); ?> </p>

        </div>
        <div class= "flexRow all-post-particulars">
          <div class="hold-category"><span><strong>Category: </strong></span><ul> <?php echo get_the_category_list();?></ul></div>
          <div class="hold-tags"><span><?php the_tags("<strong>Tags: </strong>");?></span></div>
        <div class="hold-post-particulars">
          <p>
            <strong>Date: </strong><?php the_date( 'l F j, Y' ); ?>
          </p>
          <p>
            <strong>Author: </strong><?php the_author(); ?>
          </p>
        </div>
        </div>
      </article>
        <?php endwhile; ?>
        <div style="clear:both;" class="navPosts">
        <?php next_posts_link( 'Older posts' ); ?>
        <?php previous_posts_link( 'Newer posts' ); ?>
      </div>
      <?php else: ?>
          <p><?php _e('Sorry, There are not any new posts'); ?></p>
        <?php endif; ?>

          </div>



    </section>


    </main>

<?php get_footer(); ?>
