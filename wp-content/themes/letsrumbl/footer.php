<?php 
global $az_options_show_footer, $postid;
$options_alice = get_option('alice'); 

?>
</div>
<!-- End Main -->


<?php if( !empty($options_alice['enable_back_to_top']) && $options_alice['enable_back_to_top'] == 1) { ?>
<!-- Back To Top -->
<a class="back-to-top"><i class="font-icon-arrow-up-simple-round"></i></a>
<!-- End Back to Top -->
<?php } ?>

<?php if($az_options_show_footer) { /* Start $show_footer; */ ?>
<footer class="footer">
	
	<?php if ( is_home() ) {
		// Blog Page and Search Page
		az_footer_widget(get_option('page_for_posts'));
	}
	else {
		// All Other Pages and Posts
		az_footer_widget($postid);
	}
	?>

	<div class="footer-bottom-area">
		<?php if( !empty($options_alice['global_menu_type']) && $options_alice['global_menu_type'] == 'classic') { ?>
			<?php get_template_part('framework/core/header/az-socialize-links'); ?>
		<?php } ?>
		<div class="credits">
		<?php if(!empty($options_alice['footer_credits_text'])) { ?> 
			<p><?php echo wp_kses_post( $options_alice['footer_credits_text'] ); ?></p>
		<?php } else { ?>
			<p>&copy; <?php echo date( 'Y' ); ?> <a href="http://www.synktgames.com">Synkt Games</a>. The Apple and Google Play logos are trademarks of their respective owners. View our <a href="https://letsrumbl.zendesk.com/hc/en-us/articles/200183489-Privacy-Policy"><strong>Data Policy</strong> </a> and <a href="https://letsrumbl.zendesk.com/hc/en-us/articles/200662070-Terms-Conditions">Terms </a> </p>
		<?php } ?>
		</div>
	</div>
</footer>
<?php } /* End $show_footer; */ ?>

</div>
<!-- End Wrap -->

<?php if( !empty($options_alice['enable_custom_js']) && $options_alice['enable_custom_js'] == 1 ) { 
	echo '<script type="text/javascript">'.$options_alice['custom_js'].'</script>'; 
} ?> 

<?php wp_footer(); ?>	

</body>

</html>
