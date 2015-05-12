<?php get_header(); ?>


<div class="content">
   <!--?php include='comments.php' ?-->
   

  <div id="post">
      <?php
if ( have_posts() ) :
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
       
<h2><?php the_title();?></h2>
<p><?php the_content();?></p>
<?php 
endwhile;

endif;
?>
      
      
  </div>
  
   <div id="widget">
   <?php dynamic_sidebar('linker-zijbalk'); ?>
   <?php wp_list_comments(); ?>
    <?php comment_form(); ?>
    </div>
    
    
    

</div><!-- .content -->
<?php get_footer(); ?>