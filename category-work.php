<?php
/*
Template Name: category-work
*/ ?>
<?php get_header(); ?>


    <main id="our-work">
      <div class="breadcrumbs"> <?php
      if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
        ?></div>
      <section class="hold-columns top-center-cols">
      <div class="left-column">
        <?php get_sidebar("work");?>

    </div>
<div class="right-column">
  <?php $post  = get_post(22); ?>



                <article class="card titlecard">
                <a href="<?php echo $post->post_permalink ?>"><img src="<? $image= wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'oev-thumbnail' ); echo $image[0]; ?>"/></a>
                <div class="hold-article-text">

                  <h1 class="post-title mid-accent-bar"><?php echo $post->post_title;?></h1>

                <p ><?php echo  apply_filters( 'the_content', $post->post_content ); ?> </p>
                <div class="hold-date">
                  <span>
                    <?php echo date( 'l F j, Y',strtotime($post->post_date)); ?>
                  </span>
                </div>
              </div>


            </article>

          </div>
        </section>
<section class="hold-columns top-center-cols">

<div class="full-width">

    <h2 class="mid-accent-bar" id="work-initiatives">Initiatives</h2>
    <div class="flexRow wrapIt">

				<?php
        $catObject =  get_category($cat);
        if($catObject->slug != 'work'){
          $catObject = get_category_by_slug('work');
        }
        $parentID = $catObject->term_id;


        foreach (get_categories(array(

				    'orderby' => 'name',
				    'parent'  => $parentID,
						'exclude' => 1,
				)) as $cat) : ?>



				<article class="card four-to-page">
					<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /></a>
					<div class="hold-article-text">
					<a href="<?php echo get_category_link($cat->term_id); ?>"><h3><?php echo $cat->cat_name; ?></h3></a>
					<p ><?php echo $cat->description; ?></p>
					</div>
				</article>




				<?php endforeach; ?>
        	</div>

      </div>
    </section>





    </main>

<?php get_footer(); ?>
