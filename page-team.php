<?php
/*
Template Name: Team
*/
get_header();
$linkedin = "https://www.linkedin.com/username";
$twitter = "https://www.twitter.com/username";
$employee_image = array();
$employee_name = array('Linda O\'Riely','Lawrence Dinkard','Bill Jones','John Doe');
$employee_title = array('Accountant', 'Engineer', 'Customer Service', 'Legal');
$employee_image[0] = "/wp-content/themes/FoundationPress/src/assets/images/headshot1.png";
$employee_image[1] = "/wp-content/themes/FoundationPress/src/assets/images/headshot2.png";
$employee_image[2] = "/wp-content/themes/FoundationPress/src/assets/images/headshot3.png";
$employee_image[3] = "/wp-content/themes/FoundationPress/src/assets/images/headshot4.png";
$dummy_bio = array();
$dummy_bio[0] = "Nunc aliquam mauris ligula, vitae cursus erat aliquet et. Suspendisse quis iaculis massa, eget tempus lectus. Sed non vestibulum tellus. Mauris eu euismod purus. Morbi quis nunc gravida augue molestie laoreet sit amet in mauris. Ut interdum, velit ac ullamcorper lobortis, nisi ipsum faucibus libero, pellentesque hendrerit augue enim non dolor. Maecenas malesuada diam sed auctor vehicula. Fusce vel feugiat tortor. Suspendisse eget lectus congue, pellentesque lectus.";
$dummy_bio[1] = "Quisque blandit enim sed erat rhoncus, vitae posuere magna hendrerit. Mauris malesuada nisl eu dui congue scelerisque. Nunc ut nunc pretium mauris pellentesque dapibus in nec ipsum. Sed eu varius enim. Aliquam tincidunt, diam ut interdum malesuada, arcu ipsum varius neque, at mollis dui tortor ac velit. Integer vitae nisi tincidunt, vehicula arcu quis, placerat dui. Fusce eu est turpis. Aliquam erat volutpat. Sed turpis erat, ornare a dignissim nec, fermentum ac.";
$dummy_bio[2] = "Cras porta consectetur nisl, nec tristique felis vestibulum a. Nullam porttitor dignissim ligula, id dignissim tortor rhoncus molestie. Fusce ultricies nisi ut libero commodo accumsan. Curabitur finibus finibus finibus. Pellentesque ullamcorper, augue quis porttitor finibus, sapien nisl dignissim mi, sit amet malesuada massa nulla non velit. Sed interdum dolor id odio gravida convallis. In lobortis scelerisque mi vitae pellentesque. Proin efficitur dapibus efficitur. Nunc tincidunt lorem risus, ut dapibus nisl pulvinar quis.";
$dummy_bio[3] = "Phasellus ut imperdiet diam, non lobortis massa. Aenean at nibh id urna laoreet viverra. Curabitur ultrices libero ac tellus tempor, et eleifend risus dictum. Suspendisse dignissim imperdiet ornare. Nulla tincidunt egestas sapien, eu fermentum nibh tempor vitae. Vivamus erat sem, rutrum id massa venenatis, venenatis ornare dolor. Etiam nisl nisl, sodales rhoncus lacinia eu, gravida id magna. Vestibulum eget purus sagittis, rutrum eros ac, tristique odio. Fusce faucibus erat nisi, vel mollis.";

$bio_image = "/wp-content/themes/FoundationPress/src/assets/images/david-fontain.png";
?>

<header class="team-hero" role="banner">

  <div class="inner">

    <div class="headlines">
      <h1>Team</h1>
      <hr class="hero-hr">
      <h2>Meet The Brains<br />Behind Safesite</h2>
    </div>

    <div id="bio" class="highlighted-employee">

      <div class="photo" style="background-image: url(<?= $bio_image; ?>);"></div>
      <div class="text">
        <p class="name-title">
          <span class="name">David Fontain</span>
          <span class="title">PRESIDENT</span>
        </p>
        <p class="bio">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi culpa dolor excepturi facere iusto magnam nemo nobis odio odit, omnis possimus, quas qui quidem recusandae rem vel voluptates voluptatum? Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam atque aut cumque delectus dolorum eius harum impedit incidunt ipsam maiores minus molestiae nam, odit omnis optio possimus voluptas. Quasi!Lorem Lorem ipsum dolor sit amet.
        </p>
        <div class="social">
          <a class="linkedin" target="_blank" href="<?= $linkedin; ?>123"><span><i class="icon-social-linkedin"></i></span></a>
          <a class="twitter" target="_blank" href="<?= $twitter; ?>123"><span><i class="icon-social-twitter"></i></span></a>
        </div>
      </div>

    </div>

    <?php
      for($i=0;$i<4;$i++) {
        echo '<div class="employee">
              <a href="#bio" class="employee-img" 
                  style="background-image: url('.$employee_image[$i].');"
                  data-name="'.$employee_name[$i].'"
                  data-title="'.$employee_title[$i].'"
                  data-bio="'.$dummy_bio[$i].'"
                  data-photo="'.$employee_image[$i].'"
                  data-linkedin="'.$linkedin.'"
                  data-twitter="'.$twitter.'"><span class="screen-reader-text">'.$employee_name[$i].'</span></a></div>';
      }

    ?>

  </div><!-- .inner -->

</header>
<script>
  jQuery(document).ready(function($){

    $('body').on('click mouseover','a.employee-img',function(){
      $('.highlighted-employee .photo').css('background-image','url('+$(this).data('photo')+')');
      $('.highlighted-employee .name').html($(this).data('name'));
      $('.highlighted-employee .title').html($(this).data('title'));
      $('.highlighted-employee .bio').html($(this).data('bio'));
      $('.highlighted-employee .linkedin').attr('href',$(this).data('linkedin'));
      $('.highlighted-employee .twitter').attr('href',$(this).data('twitter'));
    })

  });
</script>
<main class="main-content">
  <div class="inner">
    <div class="mission">
      <h3 class="h2">Our Mission</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aspernatur delectus distinctio dolorem doloremque doloribus ea eaque earum, eius explicabo fugit harum neque officia quisquam reiciendis sed, similique? Esse, quae? Blanditiis consequatur dolorem ducimus eos, esse harum maiores nam odio quisquam reiciendis, repudiandae, tempora tempore ut. Deleniti eius laboriosam mollitia nihil ratione!</p>
      <p>Alias assumenda consequuntur culpa cupiditate dignissimos ducimus esse fugiat id in ipsa laboriosam, maxime, minima, nam nisi nulla obcaecati quia quisquam vel! Aliquam consequuntur debitis inventore quis repellat ullam? Aliquid eum itaque similique. Dicta doloribus eum ipsum nobis pariatur perferendis reprehenderit similique, voluptate! Illo!</p>
    </div>
    <div class="cta">
      <div class="spacer">&nbsp;</div>
      <p>We are always looking for new talent to add to the Safesite team. Think you have what it takes?</p>
      <a class="button">Join the Team</a>
    </div>
  </div>
</main>

<?php get_footer();