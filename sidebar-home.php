<div id="sidebar-primary" class="sidebar home-sidebar full-sidebar">

    <?php if ( is_active_sidebar( 'home-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'home-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>
