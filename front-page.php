<?php get_header('home');  ?>

<div class="main homeMain">
  <div class="container">
    <div class="full">
      <img class="headshot" id="Hello" src="wp-content/themes/wordpress_starter_theme/images/photo200.jpg">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="wzContent">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      <?php endwhile; // end the loop?>
    </div>
  </div>
      <div class="skills">
        <div class="container skillsContainer">
          <h2><span class="orange">My</span> Skills</h2>
          <div class="skillIconFlexer">
            <i class="devicon-html5-plain devIcon" id="html"></i>
            <i class="devicon-css3-plain devIcon" id="css"></i>
            <i class="devicon-javascript-plain devIcon" id="javascript"></i>
            <i class="devicon-jquery-plain devIcon" id="jquery"></i>
            <i class="devicon-sass-original devIcon" id="sass"></i>
            <i class="devicon-git-plain devIcon" id="git"></i>
            <i class="devicon-github-plain devIcon" id="github"></i>
            <i class="devicon-gulp-plain devIcon" id="gulp"></i>
            <i class="devicon-wordpress-plain devIcon" id="wp"></i>
          </div>
          <div class="diamond">
          </div>
          <div class="hoverResult">
          </div>
        </div>
      </div>

      <?php $portfolio = new WP_Query(
        array(
          'post_type' => 'portfolio',
          'post_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
    
  <div class="container">
    <div class="portfolioContent" id="Portfolio">
      <h2><span class="orange">My</span> Portfolio</h2>
      <?php if ($portfolio->have_posts()): ?>
        <?php while ($portfolio->have_posts()): $portfolio->the_post(); ?>

          <div class='<?php echo $post->post_name ?> portfolioItem'>
            
            <div class="imageContain">
              <?php while(have_rows('images')): the_row() ?>
                <?php $image = get_sub_field('image'); ?>
                <img src="<?php echo $image['sizes']['large']?>">
                <p><?php the_sub_field('caption'); ?></p>
              <?php endwhile ?> <!--End repeater loop-->
            </div>
            
            <div class="contentContain">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
              <p class="techUsed">Technologies Used:</p>
              <?php while(have_rows('portfolio_tags')): the_row() ?>
                <p class="technology"><?php the_sub_field('technologies'); ?></p>
              <?php endwhile ?><!--End Repeater Loop -->
              <a href="<?php the_field('button_url'); ?>"><button class="viewLive">View Live</button></a>
            </div> 

            
          </div>
          
            <?php endwhile ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      </div><!--End of portfolio content-->
            <?php $blogPosts = new WP_Query(
              array(
                'post_type' => 'post',
                'post_per_page' => -1,
                'order' => 'ASC'
              )
            ); ?>
  </div><!--End of Container-->
      <h2 class="title" id="Blog"><span class="orange">Latest</span> Blog Posts</h2>
      <div class="blogContent" data-flickity='{ "cellAlign": "center", "contain": true }'>
        <?php if ($blogPosts->have_posts()):?>
          <?php while ($blogPosts->have_posts()) : $blogPosts->the_post();?>
            <?php $postpic = get_field('post_pic'); ?>
              <div class="posts widePosts" style="background: url(<?php echo $postpic['url']?>);background-size: cover;background-repeat: no-repeat;">
                <div class="postOverlay">
                  <div class="postBar">
                    <div class="postBarContain">
                      <h2><?php the_title();?></h2>
                      <ul>
                        <li><?php the_category('//'); ?>//</li>
                        <li><?php the_time('F j, Y'); ?>//</li>
                        <li>Posted By <?php the_author(); ?></li>
                      </ul>
                      <div class="contentContain">
                        <?php the_content();?>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          <?php endwhile;?>
          <?php wp_reset_postdata();?>
        <?php endif;?>
      </div> <!-- /,content -->
      <!-- <a href="http://localhost/drewPortfolio/blog"><button class="viewPosts">View Older Posts</button></a> -->
    
    <div class="quoteSection">
      <div class="container">
        <blockquote>"Websites should look good from the inside and out."</blockquote>
        <p>Paul Cookson</p>
      </div>
    </div>

    <div class="contactForm" id="Contact">
      <div class="container">
        <h2><span class="orange">Contact</span> Me</h2>
        <div class="contactFlexer">
          <?php the_field('form'); ?>
          <div class="contactInfo">
            <h4>Get In Touch</h4>
            <p>Thank you for viewing my site. I am currently available for full time opportunities within the GTA! If you are interested in working together to build something amazing, please contact me.</p>
            <a href="mailto:hello@andrew-thompson.co">hello[at]andrew-thompson.co</a>
            <p>(647)291-5720</p>
          </div>
        </div>
      </div>
    </div>

</div><!--Main-->
<?php get_footer(); ?>