

		<section class="service sections about about--text">
			<div class="about__container container">
				<div class="service__title">
					<h2 class="h2 about__title"><?php the_field('title_first-page'); ?></h2>
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
							<?php 
								if(have_rows('services')){

									while ( have_rows('services') ) : the_row();
								?>

								<?php 
									$link = get_sub_field('services__link');
									$img = get_sub_field('services__img');
									$name = get_sub_field('services__name');
									$img_bg = get_sub_field('services__bg');
									if( $link ): 
								?>
									<?php foreach( $link as $term ): ?>
									<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="swiper-slide service__slide">
										<?php endforeach; ?>
									<?php endif; ?>
										<img class="service__icon" src="<?php echo $img; ?>" alt="">
										<p><?php echo $name; ?></p>
										<img class="service__bg" src="<?php echo $img_bg; ?>" alt="">
									</a>

							<?php
									endwhile;

								}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>