<?php
/* Template name: Спорт */
?>

<?php get_header(); ?>
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
	/>

	<section class="about sport sections">
		<div class="about__container container">
			<h2 class="h2 about__title"><?php the_field('sport__title'); ?></h2>
			<div class="sport--block">
				<?php if( have_rows('sport__text') ): ?>
					<?php while( have_rows('sport__text') ): the_row(); 
						$sport_line = get_sub_field('sport__line');
					?>
						<p><?php echo $sport_line; ?></p>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="sport__wrap">
				<div class="sport__slider">
					<div class="swiper-wrapper">
						<?php if( have_rows('sport__slider') ): ?>
							<?php while( have_rows('sport__slider') ): the_row(); 
								$client_img = get_sub_field('sport__img');
							?>
								<a href="<?php echo $client_img; ?>" data-fancybox="gallery" class="swiper-slide sport__slide "><img src="<?php echo $client_img; ?>" alt="">
									<span></span>
									<b>
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M20.9999 20.9999L16.6499 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>
									</b>
								</a>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>
				<div class="sport__next"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M14 8L0.499999 15.7942L0.499997 0.205773L14 8Z" fill="white"/>
					</svg>
					</div>
				<div class="sport__prev"><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M-3.93402e-07 8L13.5 0.205772L13.5 15.7942L-3.93402e-07 8Z" fill="white"/>
					</svg>
					</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>