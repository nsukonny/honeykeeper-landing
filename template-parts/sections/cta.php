<section class="cta">
	<div class="container big">
		<div class="cta-wrapper">
			<div class="cta-info">
				<div class="cta-title">
				<?php esc_html($best_price_title = the_field('best_price_title')); ?>
				</div>
				<p><strong>
				<?php esc_html($best_price_disclaimer = the_field('best_price_disclaimer')); ?>
				</strong></p>
				<div class="cta-buttons">
					<button class="button-grey download" type="button">
						<span class="button-grey-icon"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path class="path-a" d="M10.2125 15.1625C10.325 15.275 10.4375 15.3875 10.55 15.3875C10.6625 15.5 10.8875 15.5 11 15.5C11.1125 15.5 11.3375 15.5 11.45 15.3875C11.5625 15.275 11.675 15.275 11.7875 15.1625L16.2875 10.6625C16.7375 10.2125 16.7375 9.53752 16.2875 9.08752C15.8375 8.63752 15.1625 8.63752 14.7125 9.08752L12.125 11.675V3.125C12.125 2.45 11.675 2 11 2C10.325 2 9.87501 2.45 9.87501 3.125V11.675L7.2875 9.08752C6.8375 8.63752 6.1625 8.63752 5.7125 9.08752C5.2625 9.53752 5.2625 10.2125 5.7125 10.6625L10.2125 15.1625Z" fill="#FEA434"></path><path class="path-b" d="M18.875 12.125C18.2 12.125 17.75 12.575 17.75 13.25V15.5C17.75 16.7375 16.7375 17.75 15.5 17.75H6.50001C5.26251 17.75 4.25001 16.7375 4.25001 15.5V13.25C4.25001 12.575 3.8 12.125 3.125 12.125C2.45 12.125 2 12.575 2 13.25V15.5C2 17.975 4.025 20 6.50001 20H15.5C17.975 20 20 17.975 20 15.5V13.25C20 12.575 19.55 12.125 18.875 12.125Z" fill="white"></path></svg>	</span><span>Скачать прайс</span>
					</button> 
						<button class="button-gradient contact open-modal">
							<a href="<?php esc_url($dwn_price_link = the_field('dwn_price_link')); ?>">
							<span><?php esc_html($dwn_price_title = the_field('dwn_price_title')); ?></span>
							</a>
						</button>
					</div>
				<div class="cta-img">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/img/cta/cta.png' ); ?>" width="400" height="400" alt="<?php esc_attr_e( 'Мёд', 'honeykeeper' ); ?>">
				</div>
			</div>
		</div>
	</div>
</section>
