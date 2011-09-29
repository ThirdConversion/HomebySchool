<?php
/**
 * Template Name: Free-Guide
 */
get_header(); ?>

<script>(function(head, css){
  css.rel = 'stylesheet';
  css.href = '<?php bloginfo('template_directory'); ?>/css/freeguide.css';
  head.appendChild(css);
})(document.getElementsByTagName('head')[0], document.createElement('link'))</script>
<div id="content" class="col-full splash">
  <div id="main" class="fullwidth">
    <h1>The No-Tears Guide to Moving to Fairfax, VA</h1>

    <p>
    <img src="<?php bloginfo('template_url') ?>/images/No-Tears Guide.jpg" alt="No-Tears Guide to Moving to Fairfax, VA" />
    This guide contains all you need to know to make a good decision about
    your move. There is information about Fairfax County Public Schools, homes for
    sale in Fairfax VA, commuting options and even a map of the different areas in
    Fairfax County VA.

    <h2>Three reasons to subscribe</h2>

    <ol>
      <li><strong>No fluff</strong>: The Guide is not filled with fluff &mdash; it is
      full of comprehensive information.
      <li><strong>No cost</strong>: The Guide is FREE. There is absolutely no commitment on
      your part.
      <li><strong>No time wasted</strong>: Downloading The Guide will save you over 97 hours
      of research &mdash; wouldn&rsquo;t you rather spend that time doing something
      else?
    </ol>

    <p><strong>Your email address will NEVER be sold or given to ANYONE.</strong>
    That is our promise to you. Read our comprehensive <a href="/privacy">privacy policy</a>.

    <h2>How to subscribe to The No-Tears Guide to Moving to Fairfax</h2>

    <p>It's simple! enter your information in the form below and you will instantly
    receive an email with the first two downloads of <strong>The No-Tears Guide
    to Moving to Fairfax</strong>. A day later, you will get another email with the
    third download.

    <p>After the <abbr>PDF</abbr> downloads, The No-Tears Guide to Moving to Fairfax
    continues as a weekly article.</p>

    <? include('subscription_form.php'); ?>

    <p>When you submit your information above, you will be taken to a "Thank You" page.

    <h2>Registration Details</h2>

    <p>Please fill the form completely. If you cannot subscribe through this
    online form, please <a href="mailto:marina@homebyschool.com">email me</a> with
    your details using the form at the bottom of this page.

    <p>If you choose to <a id=unsubscribe>unsubscribe</a> in the future, you will get an
    option on every email so you can take yourself off the list at any time.

    <h2>Subscribe with confidence</h2>

    <p>A few points about the information that you provide &mdash; just to be crystal-clear:

    <ul>
      <li>We will NEVER sell your information to ANYONE.
      <li>We will ONLY use your email address for this specific subscription.
      <li>You may unsubscribe from a link available on every weekly article.
    </ul>

  </div>
</div>
<?php get_footer(); ?>