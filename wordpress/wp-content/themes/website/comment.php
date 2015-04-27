<?php if ( have_comments() ) : ?>
	<h3 id="comments-title"><?php
		printf(
			_n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'twentyten' ),
			number_format_i18n( get_comments_number() ),
			'<em>' . get_the_title() . '</em>' 
		);
	?></h3>
// [and more, of course...]
<?php else : // or, if we don't have comments:
	if ( ! comments_open() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyten' ); ?></p>
	<?php endif; // end ! comments_open() ?>
<?php endif; // end have_comments() ?>