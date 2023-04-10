<div class="xts-welcome-page">

	<?php if ( woodmart_get_opt( 'white_label' ) ) : ?>
		<div class="xts-box xts-white-label-box xts-theme-style">
			<div class="xts-box-content">
				<h3>
					<?php if ( woodmart_get_opt( 'white_label_dashboard_title' ) ) : ?>
						<?php echo esc_html( woodmart_get_opt( 'white_label_dashboard_title' ) ); ?>
					<?php else : ?>
						<?php esc_html_e( 'Welcome to FenD', 'woodmart' ); ?>
					<?php endif; ?>
				</h3>
				<div class="xts-about-text">
					<?php if ( woodmart_get_opt( 'white_label_dashboard_text' ) ) : ?>
						<?php echo wp_kses( woodmart_get_opt( 'white_label_dashboard_text' ), true ); ?>
					<?php else : ?>
						<?php esc_html_e( 'Cảm ơn bạn đã dùng giao diện cao cấp của chúng tôi - FenD. Tại đây, bạn có thể bắt đầu tạo cửa hàng web tuyệt vời của mình bằng cách nhập các tùy chọn chủ đề và trang web dựng sẵn của chúng tôi.

', 'woodmart' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php else : ?>
		<div class="xts-box xts-welcome-box xts-theme-style xts-color-scheme-light">
			<div class="xts-box-content">
				<img src="<?php echo esc_url( WOODMART_ASSETS_IMAGES . '/dashboard/banner.png' ); ?>" alt="banner">

				<h3>
					<?php esc_html_e( 'Welcome to FenD', 'woodmart' ); ?>
				</h3>

				<p>
					<?php esc_html_e( 'Cảm ơn bạn đã dùng giao diện cao cấp của chúng tôi - FenD. Tại đây, bạn có thể bắt đầu tạo cửa hàng web tuyệt vời của mình bằng cách nhập các tùy chọn chủ đề và trang web dựng sẵn của chúng tôi.', 'woodmart' ); ?>
				</p>

				<?php if ( woodmart_get_opt( 'white_label_changelog_tab' ) ) : ?>
					<a href="<?php echo esc_url( admin_url( 'admin.php?page=xts_changelog' ) ); ?>" class="xts-btn">
						<?php esc_html_e( 'What\'s new' ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>

		
	<?php endif; ?>

</div>