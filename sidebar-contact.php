<div id="sidebar-primary" class="sidebar contact-sidebar full-sidebar">

    <?php if ( is_active_sidebar( 'contact-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'contact-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>
