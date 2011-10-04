<?php
/**
 * Template Name: Splash
 */
?>
<?php get_header(); ?>

<script>(function(head, css){
  css.rel = 'stylesheet';
  css.href = '<?php bloginfo('template_directory'); ?>/css/splash.css';
  head.appendChild(css);
})(document.getElementsByTagName('head')[0], document.createElement('link'))</script>

  <div id="content" class="col-full splash">
    <div id="main" class="fullwidth front-page">
        <h1 id=intro>Would you make kids go to <em>any</em> school<br />
        &mdash;or to the right school for their needs?</h1>

      <a id=download class=glass href="/free-guide">
        <img src="<?php bloginfo('template_url') ?>/images/No-Tears Guide.jpg" alt="No-Tears Guide to Moving to Fairfax, VA" />
        The No-Tears Guide
        <i>to</i>
        Moving to Fairfax, VA
        <button class=css3button>Free Download</button>
      </a>

      <div id=blurb>
        <p>Many people who relocate to the Washington, DC metro area (which includes
        Fairfax County, VA), are concerned with finding a home by school boundary.</p>

        <p>In Fairfax County, Virginia, if you want children to go to a specific
        public school, the only way to ensure it is to live within the boundaries
        of the school (In the Fairfax County Public Schools system, the school
        assignments are very strict).

        <p>This is why most school-conscious home buyers avoid making a costly
        mistake by first selecting the right Fairfax schools, and then by
        cross-referencing available homes for sale with their chosen schools.</p>


        <blockquote>
         <img src="<?php bloginfo('template_url') ?>/images/Chantilly-VA-Military-Mom.png" alt="Chantilly VA Military Mom" />
         <strong>&ldquo;The No-Tears Guide to Moving to Fairfax VA is something
         that really helps people navigate this area.</strong>
         Fairfax County is huge; it&rsquo;s impossible to know where to start.
         It was very labor intensive to drive around looking at homes and say,
         &lsquo;This home is in Fairfax school district, this school was rated
         a 9 and this is a 2&rsquo;.&rdquo;
         <i>&mdash; Erin Clifton, Chantilly, VA; Military Mom</i>
        </blockquote>

        <h3>But cross-referencing schools and homes can be extremely frustrating</h3>

          <p>Looking for the right school is incredibly time-consuming.
          On the official Fairfax County Public Schools website (FCPS .edu), it is
          practically impossible to compare schools side by side.  And you will
          want to compare not only test scores or school rankings. You will also
          want to review the available special programs such as arts, sports,
          languages, etc.

         <p>Then, once you find the right Fairfax school for your needs, you will
          want to actually find homes for sale in Fairfax within the school boundary of
          your choice (not just a home <q>near</q> or <q>close-enough</q> to the boundary)
          &mdash; and without the right tools, this can be very time-consuming
          and just plain frustrating.

          <p>You would hope that someone would have already put together a step-by-step
          guide &mdash;with the right tools&mdash; to help you find a home by school?

          <p>We did!  And we call it <q>The No-Tears Guide to Moving to Fairfax</q></p>

          <h2>The No-Tears Guide to Moving to Fairfax, VA</h2>

          <p>The No-Tears Guide contains all you need to know to make a good
          decision about your move; there is detailed information about:</p>

          <div id=guides>
            <a id=rightschool href="/free-guide#school">
              <img src="<?php bloginfo('template_url') ?>/images/How to choose among Fairfax County Schools.jpg" alt="How to choose among Fairfax County Schools" />
              <strong>How to choose the right school</strong>
              Your guide to Fairfax County Public Schools'
              Scores, Ratings, and Special Programs.
            </a>
            <a id=affordability href="/free-guide#affording">
              <img src="<?php bloginfo('template_url') ?>/images/Fairfax VA Home Affordability Map by Fairfax High School boundary.jpg" alt="Fairfax VA Home Affordability Map by Fairfax High School boundary" />
              <strong>How much you can afford</strong>
              The time & money-saving Fairfax VA Home Affordability Map
              is an easy-to-read map of home values by Fairfax High School District.
            </a>
            <a id=homebyschool href="/free-guide#home">
              <img src="<?php bloginfo('template_url') ?>/images/How to find a Home for Sale in Fairfax VA - by Fairfax School Boundary.jpg" alt="How to find a Home for Sale in Fairfax VA - by Fairfax School Boundary" />
              <strong>How to find a home by school</strong>
              A unique way of searching for homes based on their assigned Fairfax County Schools Boundary.
            </a>
          </div>

          <p>See the big red button below? If you click on that you will be taken
           to the next page where you can sign up for the FREE No-Tears Guide to
           Moving to Fairfax, VA.</p>

          <a id=gettheguide href="/free-guide" class=css3button>Get the guide</a>

          <p>Or, if you want to get started with reading some content then click
          on any of these links:</p>

          <ul>
            <li><a href="/why-relocating-to-fairfax-va-can-be-overwhelming">Why relocating to Fairfax VA can be OVERWHELMING</a>
            <li><a href="/moving-to-fairfax-va-solve-relocation-puzzle">Moving to Fairfax Virginia? How to solve the relocation puzzle</a>
            <li><a href="/why-your-home-address-determines-your-fairfax-county-schools-assignment">Why your home address determines your Fairfax County Schools assignment</a>
          </ul>

          <div id=signature>
            <? include 'hcard-marina-brito.php'; ?>
          </div>



          <p>P.S. If at any point you have ANY question, please give us a call
          &mdash; we will be very happy to answer it.  No strings attached.

          <p>Happy house hunting!
        </div>
    </div>
  </div>
<?php get_footer(); ?>
