

	<div class="tabs forms">
		<div class="tabs__list forms__list">
			<?php if( have_rows('form__list') ): ?>
				<?php while( have_rows('form__list') ): the_row(); 
					$place = get_sub_field('form__place');
				?>
				<div class="tabs__item" >
					<p><?php echo $place; ?></p>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="forms__block">
			<?php if( have_rows('shortcode') ): ?>
				<?php while( have_rows('shortcode') ): the_row(); 
					$shortcode = get_sub_field('shortcode_form');
				?>

				<div class="tabs__wrap">
					<?php echo $shortcode; ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<!--<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>
			<div class="tabs__wrap">
				<?php echo do_shortcode( '[caldera_form id="CF6242e8448dedc"]' ); ?>
			</div>-->
		</div>
	</div>