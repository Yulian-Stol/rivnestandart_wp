<?php get_header(); ?>

	<section class="about sections">
		<div class="about__container container">

			<div class="crops">
				<ul>
					<li><a href="<?php echo get_home_url(); ?>"><?php the_field ( 'crops__main' , pll_current_language ( 'slug' ) ) ; ?></a></li>
					<li><a href="<?php echo get_home_url(); ?>/#firstPage"><?php the_field ( 'crops__services' , pll_current_language ( 'slug' ) ) ; ?></a></li>
					<li><span><?php the_title(); ?></span></li>
				</ul>
			</div>

			<div class="service__title single__title">
				<h2 class="h2 about__title"><?php the_title(); ?></h2>
				<?php if( get_field('arrow') ): ?>
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
				<?php endif; ?>
			</div>

			<?php if( get_field('about__block') ): ?>
				<div class="about__block">
					<?php the_field('about__block'); ?>
				</div>
			<?php endif; ?>

			<?php if( get_field('answer') ): ?>
				<div class="answer">
					<?php if( have_rows('answer') ): ?>
						<?php while( have_rows('answer') ): the_row(); 
							$title = get_sub_field('answer__title');
							$text = get_sub_field('answer__text');
						?>
							<div class="accordion">
								<div class="accordion__header">
									<p><?php echo $title; ?></p>
									<span></span>
								</div>
								<div class="accordion__content">
									<p>
										<?php echo $text; ?>
									</p>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( get_field('word') ): ?>
				<div class="word">
					<?php if( have_rows('word') ): ?>
						<?php while( have_rows('word') ): the_row(); 
							$title = get_sub_field('word__title');
							$text = get_sub_field('word__text');
							$file = get_sub_field('word__file');
						?>
							<a href="<?php echo $file; ?>" class="word__item" target="_blank">
								<svg width="225" height="304" viewBox="0 0 225 304" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g>
									<path d="M221.5 266.5H3.5V3.5H145.699L221.5 68.8914V266.5Z" stroke="white" stroke-width="7"/>
									<circle cx="113" cy="270" r="32" fill="#00217F" stroke="white" stroke-width="4"/>
									<path d="M113 263V277" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M120 270L113 277L106 270" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
								</svg>
								<div class="word__text">
									<p class="word__text_title"><?php echo $title; ?></p>
									<p class="word__text_subtitle"><?php echo $text; ?></p>
								</div>
								<p class="word__link" href="#">Завантажити</p>
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if( get_field('pdf__wrap') ): ?>
				<div class="pdf__wrap">
					<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
					<link
						rel="stylesheet"
						href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
					/>
					<div class="pdf__slider">
						<span class="pdf__shadow"></span>
						<span class="pdf__shadow--right"></span>
						<div class="swiper-wrapper">
							<?php if( have_rows('pdf__wrap') ): ?>
								<?php while( have_rows('pdf__wrap') ): the_row(); 
									$img = get_sub_field('pdf__img');
								?>
									<a href="<?php echo $img; ?>" class="swiper-slide pdf__slide" data-fancybox="gallery"><img src="<?php echo $img; ?>" alt=""><span></span><b><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										<path d="M20.9999 20.9999L16.6499 16.6499" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										</b>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if( get_field('form') ): ?>
				<div class="form">
					<?php get_template_part( 'parts/form' ); ?>
				</div>
			<?php endif; ?>

			<?php if( get_field('contact__tabs') ): ?>
				<div class="contact__wrap tabs">
					<div class="contact__block tabs__list">
						<?php if( have_rows('contact__tabs') ): ?>
							<?php while( have_rows('contact__tabs') ): the_row(); 
								$title = get_sub_field('contact__title');
								$img_place = get_sub_field('contact__img-place');
								$img_tel = get_sub_field('contact__img-tel');
								$img_mail = get_sub_field('contact__img-mail');
								$place = get_sub_field('contact__place');
								$tel = get_sub_field('contact__tel');
								$tel__link = get_sub_field('contact__tel_link');
								$mail__link = get_sub_field('contact__mail_link');
								$mail = get_sub_field('contact__mail');
							?>
								<div class="contact__info tabs__item" >
									<p class="contact__title"><?php echo $title; ?></p>
									<p><img src="<?php echo $img_place; ?>" alt=""><?php echo $place; ?></p>
									<p><img src="<?php echo $img_tel; ?>" alt=""><a href="tel:<?php echo $tel__link; ?>"><?php echo $tel; ?></a></p>
									<p><img src="<?php echo $img_mail; ?>" alt=""><a href="mailto:<?php echo $mail__link; ?>"><?php echo $mail; ?></a></p>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="contact__block">
						<div class="tabs__wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5062.180318328749!2d26.262523755608374!3d50.62544192246093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f1356678d383f%3A0x9f3c19d893f19fb1!2z0KDRltCy0L3QtdGB0YLQsNC90LTQsNGA0YI!5e0!3m2!1suk!2sua!4v1647185310566!5m2!1suk!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="tabs__wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5062.180318328749!2d26.262523755608374!3d50.62544192246093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f1356678d383f%3A0x9f3c19d893f19fb1!2z0KDRltCy0L3QtdGB0YLQsNC90LTQsNGA0YI!5e0!3m2!1suk!2sua!4v1647185310566!5m2!1suk!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="tabs__wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5062.180318328749!2d26.262523755608374!3d50.62544192246093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f1356678d383f%3A0x9f3c19d893f19fb1!2z0KDRltCy0L3QtdGB0YLQsNC90LTQsNGA0YI!5e0!3m2!1suk!2sua!4v1647185310566!5m2!1suk!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="tabs__wrap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.628318885043!2d26.248094715737388!3d50.615443679498455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f134e84dc72f1%3A0xbd98be0fd9b2b540!2z0LLRg9C70LjRhtGPINCi0LjRhdCwLCA0LCDQoNGW0LLQvdC1LCDQoNGW0LLQvdC10L3RgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgMzMwMTc!5e0!3m2!1suk!2sua!4v1647343515737!5m2!1suk!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<?php if( get_field('list') ): ?>
				<div class="service__wrap">
					<div class="service__slider tabss">
						<div class="swiper-wrapper tabss__list">
							<?php if( have_rows('list') ): ?>
								<?php while( have_rows('list') ): the_row(); 
									$img = get_sub_field('list__img');
									$name = get_sub_field('list__name');
									$img_bg = get_sub_field('list__bg');
								?>
									<div class="swiper-slide">
										<a href="#" class="service__slide tabss__item">
											<img class="service__icon" src="<?php echo $img; ?>" alt="">
											<p><?php echo $name; ?></p>
											<img class="service__bg" src="<?php echo $img_bg; ?>" alt="">
										</a>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
						</div>
						<?php if( have_rows('content__list') ): ?>
							<?php while( have_rows('content__list') ): the_row(); 
							?>
							<div class="about__block tabss__wrap">
								<?php if( have_rows('accordion') ): ?>
									<?php while( have_rows('accordion') ): the_row(); 
										$title = get_sub_field('about__title');
										$content = get_sub_field('about__list');
									?>
									<div class="accordion accordion--distance">
										<div class="accordion__header accordion__margin">
											<p class="accordion__title"><?php echo $title; ?></p>
											<span></span>
										</div>
										<div class="accordion__content">
											<p>
												<?php echo $content; ?>
											</p>
										</div>
									</div>
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</section>

<?php get_footer(); ?>