<footer>
  <div class="footer-decoration"></div>
  <nav class="footerNav">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer-nav',
      'container_class' => 'footer-nav' ) );
    ?>

    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer-social',
      'container_class' => 'footer-social' ) );
    ?>

    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer-extra',
      'container_class' => 'footer-extra' ) );
    ?>


  <div class="footer_general_signup">

<div id="mc_embed_signup">
<form action="https://oevca.us13.list-manage.com/subscribe/post?u=751ac287d547309912de249c7&amp;id=b9da1f9286" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
<div class="mc-field-group" style="width:100%">
  <label for="mce-EMAIL">Email Address
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" >
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_751ac287d547309912de249c7_b9da1f9286" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe To Our Email List" name="subscribe" id="mc-embedded-subscribe" class="button general_mailing_subscribe"></div>
    </div>
</form>
</div>
</div>
</nav>

</footer>


</div>
</div>

<?php wp_footer(); ?>



</body>
</html>
