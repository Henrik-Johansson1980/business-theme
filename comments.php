<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage businessthemestarter
 *
 * @version 1.0.0
 */

?>

<div class="comments">
	<h2>Comments</h2>
	<?php
	$args = array(
		'walker'            => null,
		'max_depth'         => '',
		'style'             => 'ul',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => 80,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support.
		'short_ping'        => false,   // @since 3.6.
		'echo'              => true,     // boolean, default is true.
	);
	wp_list_comments( $args, $comments );

	$form_args = array(
		'label_submit'        => 'Send',
		'title_reply'         => 'Write a Reply or Comment.',
		'comment_notes_after' => '',
		'comment_field'       => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'businessthemestarter' ) . '</label><br><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
	);
	comment_form( $form_args );
	?>

</div>
