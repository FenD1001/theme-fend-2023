<?php

$logo_url = WOODMART_ASSETS_IMAGES . '/fend.svg';

if ( woodmart_get_opt( 'white_label' ) ) {
	$image_data = woodmart_get_opt( 'white_label_dashboard_logo' );

	if ( ! empty( $image_data['url'] ) ) {
		$logo_url = wp_get_attachment_image_url( $image_data['id'], 'full' );
	}
}

?>

