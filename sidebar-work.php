<div id="sidebar-primary" class="sidebar work-sidebar full-sidebar">

    <?php if ( is_active_sidebar( 'work-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'work-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>
