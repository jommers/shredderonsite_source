<?php global $woo_options; ?>
	<?php
		$total = $woo_options['woo_footer_sidebars']; if ( ! isset( $total ) ) { $total = 4; }
		if ( ( woo_active_sidebar( 'footer-1' ) ||
			   woo_active_sidebar( 'footer-2' ) ||
			   woo_active_sidebar( 'footer-3' ) ||
			   woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {

  	?>

	<div id="footer-widgets">
		<div class="col-full col-<?php echo $total; ?>">

		<?php $i = 0; while ( $i < $total ) { $i++; ?>
			<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>

		<div class="block footer-widget-<?php echo $i; ?>">
        	<?php woo_sidebar( 'footer-' . $i ); ?>
		</div>

	        <?php } ?>
		<?php } ?>

		<div class="fix"></div>
		<div id="logos">
			<a href="http://www.naidonline.org" target="_blank"><img src="<?=FILES?>/images/INTL_logo_sml.jpg" alt="NAID logo" /></a>
			<?php /*?><a style="margin-left: 30px;" href="https://www.provisors.com/members/memberDetail.asp/id/7759" target="_blank"><IMG style="border:1px; width:218px; height48px;" SRC="<?=FILES?>/images/220x50_tagline_logo.gif" alt="tagline logo"/></a><?php */?>
		</div>
		</div>
	</div><!-- /#footer-widgets  -->
    <?php } ?>

	<div id="footer">
		<div class="col-full">

		<div id="copyright" class="col-left">
		<?php if( isset( $woo_options['woo_footer_left'] ) && $woo_options['woo_footer_left'] == 'true' ) {

				echo stripslashes( $woo_options['woo_footer_left_text'] );

		} else { ?>
			<p><a href="/privacy-policy/" target="_blank">Privacy Policy</a> | Confidential Data Destruction Company &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'woothemes' ); ?></p><br/>
			
		
			
<div style="padding:10px 0px; clear: both; text-align: center;">
	<a target="_blank" rel="nofollow" href="http://firm-media.com"><img style="border:0; vertical-align:middle;" src="http://firm-media.com/wp-content/themes/firmmedia3/img/basic/ico-firm-media.gif" alt="fm-icon"/></a> &nbsp;
	<a target="_blank" rel="nofollow" href="http://firm-media.com">Strategic Internet Marketing and Design by Firm Media. &copy; <? echo date(Y); ?></a></div>		<?php } ?>
		</div>
		
		
		<?php if(is_front_page()): ?>
			<p><a href="/los-angeles-document-destruction-paper-shredding-services/">Confidential Data Destruction</a> Company offers <a title="Los Angeles mobile document destruction" href="/los-angeles-mobile-document-destruction/">mobile document destruction,</a> <a title="Santa Monica paper shredding services" href="/santa-monica-mobile-document-destruction-mobile-paper-shredding-services/">paper shredding</a> and e-waste disposal services. We also provide clients in Southern California with <a title="Pasadena mobile paper shredding" href="/pasadena-mobile-document-destruction-mobile-paper-shredding/">mobile shredding services</a>, secure drop-off locations, and more.</p>
		<? endif;?>

		<div id="credit" class="col-right">
        <?php if( isset( $woo_options['woo_footer_right'] ) && $woo_options['woo_footer_right'] == 'true' ) {

        	echo stripslashes( $woo_options['woo_footer_right_text'] );

		} else { ?>
			<p></p>
		<?php } ?>
		</div></div>
	</div><!-- /#footer  -->
</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
<script type="text/javascript">
jQuery(".open-menu").click(function(){
	if(jQuery(".mob-menu").hasClass("active")) {
		jQuery(".mob-menu").removeClass("active");	
		jQuery(".mob-menu").slideUp(500);	
	} else {
		jQuery(".mob-menu").addClass("active");
		jQuery(".mob-menu").slideDown(500);
	}
});
</script>
</body>
</html>