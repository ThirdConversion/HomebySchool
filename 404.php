<?php /* this is 404.php */ ?>
<?php get_header(); ?>
	<div id="content" class="col-full">
		<div id="main" class="col-<?php echo main_content_orientation(); ?>">
			<div class="post">
				<h2 class="title">
					<?php _e('Oops!','standardtheme'); ?>
				</h2>
				<p>
					<?php _e('Oops, it seems like some of the links need fixing or maybe you have mistyped something into the address bar.  We do apologize for the inconvenience.','standardtheme'); ?>
				</p>
                                <p>
				Here are some options for you:
				</p>
                                     <ul>
					<li>Hit the "back" button on your browser. It's perfect for situations like this.</li>
                                        <li>Head over to the <a href="http://fairfax.homebyschool.com">Home Page</a> </li>
                                        <li>Let us know which link is not working by <a href="mailto:marina@homebyschool.com">sending us an email</a>. If you are searching for a specific page, we'd be glad to look it up for you.</li>
				     </ul>
                                <p>
					Thanks for your understanding,
				</p>
          <div id=signature>
            <? include 'hcard-marina-brito.php'; ?>
          </div>
			</div>
		</div>
	<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>