<div id="sidebar-primary" class="sidebar bulletin-sidebar full-sidebar">

    <?php if ( is_active_sidebar( 'bulletin-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'bulletin-sidebar' ); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>

    

</div>
