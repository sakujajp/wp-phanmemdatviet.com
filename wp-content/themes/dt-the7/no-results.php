<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @since 1.0.0
 *
 * @package The7\Templates
 */

defined( 'ABSPATH' ) || exit;
?>

<article id="post-0" class="post no-results not-found">
	<h1 class="entry-title"><?php _e( 'Không tìm thấy', 'the7mk2' ); ?></h1>

	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		<?php
		// translators: %1$s - admin new post url.
		$publish_new_post_text = sprintf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'the7mk2' ), esc_url( admin_url( 'post-new.php' ) ) );
		?>
		<p><?php echo $publish_new_post_text; ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php _e( 'Xin lỗi, nhưng không có gì phù hợp với cụm từ tìm kiếm của bạn. Vui lòng thử lại với một số từ khóa khác nhau.', 'the7mk2' ); ?></p>
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'the7mk2' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif ?>
</article><!-- #post-0 .post .no-results .not-found -->
