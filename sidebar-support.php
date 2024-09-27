<div id="sidebar-primary" class="sidebar support-sidebar full-sidebar">

    <?php if ( is_active_sidebar( 'support-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'support-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>

</div>
