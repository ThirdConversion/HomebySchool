<?php /* this is footer.php */ ?>
	<div id="footer">
		<div class="col-full">
			<?php /* default footer stuff--------
			standard_navigation(is_page(), true); ? >
			<div id="credit" class="col-right">
				<p><?php standard_footer(); ? ></p>
			</div>*/ ?>

      <div class=section id=equal_housing>
        <h6>Equal Housing Opportunity</h6>
        <img src="/wp-content/themes/StandardTheme_260/images/equal-housing.png" alt="Equal Housing logo" />
        Everybody is welcome to find a home by school boundary.  A school boundary
        is simply a geographical area, just like a zip code or a postal city.
      </div>

      <div class=section id=links_footer>
        <h6>Read More</h6>
        <ul>
          <li><a href="/additional-content">Additional Content</a>
          <li><a href="/additional-content">Additional Content</a>
        </ul>

      </div>

      <div class=section id=social_footer>
        <h6>Stay in Touch</h6>
        <a href="http://facebook.com/fairfax.home.by.school" target=_blank id=social_fb>Find us on Facebook</a>
        <a href="http://twitter.com/homebyschool" target=_blank id=social_tw>Follow us on Twitter</a>
        <a href="/feed" target=_blank id=social_rss>Subscribe to new articles</a>
      </div>

      <div class=section id=contact_footer>
        <h6>Contact Us</h6>
        <? include 'hcard-marina-brito.php' ?>

        <div id=copy>&copy; <?= date('Y'); ?> Third Conversion LLC</div>
      </div>
    </div>
	</div>
</div>
<script src="<? echo bloginfo('template_url').'/js/jquery-1.6.4.min.js' ?>"></script>
<script>
<? include_overlay_ui() ?>
</script>
<?php wp_footer(); ?>
<?php standard_analytics(false); ?>
<div id=background_apple></div>
</body>
</html>