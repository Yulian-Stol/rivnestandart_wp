<?php
/* Template name: Головна */
?>

<?php get_header(); ?>

	<nav class="nav">
		<div class="nav__arrow">
			<a id="moveSectionUp" href="#"><span></span></a>
			<a id="moveSectionDown" href="#"><span></span></a>
		</div>
	</nav>

	<div id="fullpage">

		<div class="hero section" id="section0">
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
		</div>

		<div class="portfolio section" id="section1">
			<section class="contact sections">
				<div class="about__container container container--padding">
					<h2 class="h2 about__title"><?php the_field('contact--title'); ?></h2>
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
				</div>
			</section>
		</div>

		<div class="section" id="section2">
			<section class="about sections">
				<div class="about__container container">
					<h2 class="h2 about__title"><?php the_field('about__title'); ?></h2>
					<div class="about__block">
						<p><?php the_field('about__text'); ?></p>	
					</div>
				</div>
			</section>
		</div>

	</div>

<?php get_footer(); ?>