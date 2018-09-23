<?php
/* template for single careers */
get_header(); ?>

<div class="career">
  <main>
			<?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <div class="row">
              <div class="columns small-12 medium-8 content">
                <?php the_title( '<h1 class="entry-title">', '</h1>' );	?>
                <p class="about-safesite">About Safesite</p>
                <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass.
                </p>
              </div>
              <div class="columns small-12 medium-3 sidebar">
                <p>
                  <b>Location</b><br />
                    Safesite Headquarters<br />
                    San Francisco, CA
                </p>

                <p>
                  <b>Job Type</b><br />
                  Full-time
                </p>

                <p>
                  <b>Application Deadline</b><br />
                  July 24, 2017
                </p>

                <p><a class="button">Apply Now</a></p>
              </div>
            </div>
          </header>
          <section class="career-info">
            <div class="row">
              <div class="columns small-12 medium-8 content">

                <h2>Role Deliverables</h2>
                <ul class="list">
                  <li>Partner with our Account Executives to help fill their pipeline via research, cold calling and qualifying leads</li>
                  <li>Prepare activity and forecast reports</li>
                  <li>Track all activity, update leads and opportunities and manage reports</li>
                  <li>Consistently achieve quotas to ensure revenue objectives</li>
                  <li>Keep up-to-date knowledge of the industry</li>
                  <li>Ad hoc projects depending on needs of sales team</li>
                </ul>

                <h2>About You</h2>
                <ul class="list">
                  <li>Partner with our Account Executives to help fill their pipeline via research, cold calling and qualifying leads</li>
                  <li>Prepare activity and forecast reports</li>
                  <li>Track all activity, update leads and opportunities and manage reports</li>
                  <li>Consistently achieve quotas to ensure revenue objectives</li>
                  <li>Keep up-to-date knowledge of the industry</li>
                  <li>Ad hoc projects depending on needs of sales team</li>
                </ul>
                <a class="button">Apply Now</a>
              </div>
              <div class="columns small-12 medium-4 sidebar">
                <h4 class="career-category">Related Positions</h4>
                <ul class="careers-list">
                  <li>
                    <div class="career-drilldown">
                      <a class="text-link" href="#">Customer Service Representative (Part-time)</a>
                      <a class="icon-link" href="#"><span class="icon-navigate_next"></span></a>
                    </div>
                  </li>
                  <li>
                    <div class="career-drilldown">
                      <a class="text-link" href="#">Customer Service Manager</a>
                      <a class="icon-link" href="#"><span class="icon-navigate_next"></span></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </section>
					<?php the_content(); ?>
        </article>
			<?php endwhile; ?>

  </main>
</div>
<?php get_footer();
