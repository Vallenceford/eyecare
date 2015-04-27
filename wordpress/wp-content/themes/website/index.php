<?php include 'php/header.php'; ?>


<h1>PuntOog</h1>
            
    <p>
    Meer weten over aandoeningen van het ogen? Of heb je zelf een verhaal of vraag die je wilt stellen? 
    Dan ben je bij forum PuntOog op het juiste adres!
    </p>

<div id="bord">
   <div id="btns">
        <a href="lijst">Alle topics</a>
        <a href="tpcaanmaak">Maak topic aan</a>
    </div>

    

<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
		 <?php wp_insert_post( $post, $wp_error ); ?> 



</div>

<?php include 'php/footer.php'; ?>