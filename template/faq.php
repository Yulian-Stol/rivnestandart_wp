<?php
/* Template name: FAQ */
?>

<?php get_header(); ?>

	<section class="sections">
		<div class="about__container container">
			<h2 class="h2 about__title"><?php the_field('faq__title'); ?></h2>
			<div class="answer">
				<?php if( have_rows('faq-acc') ): ?>
					<?php while( have_rows('faq-acc') ): the_row(); 
						$faq_acc__title = get_sub_field('faq-acc__title');
						$faq_acc__text = get_sub_field('faq-acc__text');
					?>
						<div class="accordion">
							<div class="accordion__header">
								<p><?php echo $faq_acc__title; ?></p>
								<span></span>
							</div>
							<div class="accordion__content">
								<p>
									<?php echo $faq_acc__text; ?>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>