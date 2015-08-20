<?php get_header();

$dots_menu_navigation = get_post_meta($post->ID, 'az_dots_menu_display', true);
$options_alice = get_option('alice'); 
?>

<div id="content">
	<?php az_page_header($post->ID); ?>
	<section class="wrap_content">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php //edit_post_link( __('Edit', AZ_THEME_NAME), '<span class="edit-post">[', ']</span>' ); ?>
		<?php 
			the_content();
			wp_link_pages(
				array(
					'before' => '<p><strong>'.__('Pages:', AZ_THEME_NAME).'</strong> ',
					'after' => '</p>',
					'next_or_number' => 'number'
				)
			);
		?>
	</section>
	<?php endwhile; endif; ?>
	
	<?php if ( $dots_menu_navigation == 'show' ) { ?>
	<div class="dots-menu-navigation">
		<nav id="vertical-dots-menu">
			<ul>
			<?php az_dots_menu_navigation($post->ID); ?>
			</ul>
		</nav>
	</div>
	<?php } ?>
	
</div>

<?php get_footer(); ?>
