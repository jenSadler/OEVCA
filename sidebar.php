<div id="sidebar-primary" class="sidebar default-sidebar">

    <?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'default-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>

</div>
