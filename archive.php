<?php get_header(); ?>

	<section class="service sections about about--text">
		<div class="about__container container">

			<div class="service__title">
				<h2 class="h2 about__title">
					<?php 
						$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
						echo $term->name;
					?>
				</h2>
				<div>
					<div class="service__prev">
						<svg width="20" height="43" viewBox="0 0 20 43" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M18 41.5L2 21.5L18 1.5" stroke="white" stroke-width="3"/>
						</svg>
					</div>
					<div class="service__next">
						<svg width="20" height="43" viewBox="0 0 20 43" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2 1.5L18 21.5L2 41.5" stroke="white" stroke-width="3"/>
						</svg>
					</div>
				</div>
			</div>

			<div class="service__wrap">
				<div class="service__slider">
					<div class="swiper-wrapper">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="swiper-slide service__slide">

									<img class="service__icon" src="<?php the_field('archive__icon'); ?>" alt="">
									<p>
										<?php the_title(); ?>
									</p>
									<img class="service__bg" src="<?php the_field('archive__bg'); ?>" alt="">

							</a>
						<?php endwhile; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>