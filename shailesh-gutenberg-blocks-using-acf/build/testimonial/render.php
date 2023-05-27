<?php
/**
 * Render the content for Testimonial block.
 *
 */

if ( ! function_exists( 'shvsh_render_testimonial_block' ) ) {
	/**
	 * Render the content for Testimonial block.
	 *
	 * @return void
	 */
	function shvsh_render_testimonial_block() {
		$logo        = get_field( 'logo' );
		$title       = get_field( 'title' );
		$description = get_field( 'description' );

		?>
		<div class="shailesh_gutenberg_block-testimonial-item">
			<?php
			if ( ! empty( $logo ) ) :
				?>
				<figure class="testimonial-logo-figure">
					<?php
					echo wp_get_attachment_image( $logo['ID'], 'thumbnail', null, array( 'class' => 'testimonial-logo-img alignleft' ) );
					?>
				</figure>
				<?php
			endif;
			if ( ! empty( $title ) ) :
				echo '<h3 class="testimonial-title">' . esc_html( $title ) . '</h3>';
			endif;
			if ( ! empty( $description ) ) :
				echo '<div class="testimonial-description">' . wp_kses_post( $description ) . '</div>';
			endif;
			?>
		</div>
		<?php
	}
}

shvsh_render_testimonial_block();
