
      <?php $blogPosts = new WP_Query(
        array(
          'post_type' => 'post',
          'post_per_page' => -1,
          'order' => 'ASC'
        )
      ); ?>
    
<div class="blogContent">
      <?php $postpic = get_field('post_pic'); ?>
      <?php if ($blogPosts->have_posts()):?>
       <?php while ($blogPosts->have_posts()) : $blogPosts->the_post();?>
         <div class="posts" style="background: url(<?php echo $postpic['url']?>);background-size: cover;background-repeat: no-repeat;">
           <h2><?php the_title();?></h2>
           <?php the_content();?>
         </div>
       <?php endwhile;?>
       <?php wp_reset_postdata();?>
     <?php endif;?>
   </div> <!-- /,content -->

</div> <!-- /.main -->