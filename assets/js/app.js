'use strict';

document.addEventListener("DOMContentLoaded", function() {

	//----------------PRELOADER-----------------------

	window.onload = function () {
		document.body.classList.add('loaded_hiding');
		window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
		}, 2000);
	}

	//------------------------------ACCORDIONS---------------------------
	const accordions = (accordionSelector) => {
		const	accordion = document.querySelectorAll(accordionSelector);

		accordion.forEach(item => {
			const accordionClick = item.querySelector('.accordion__header'),
						accordionContent = item.querySelector('.accordion__content');

						

			accordionClick.addEventListener('click', (e) => {
				if(!item.classList.contains('accordion--active')) {

					item.classList.add('accordion--active')
					accordionContent.style.height = "auto"
					var height = accordionContent.clientHeight + "px"
					accordionContent.style.height = "0px"

					setTimeout(() => {
						accordionContent.style.height = height
					}, 0)

					} else {
						accordionContent.style.height = "0px"
							item.classList.remove('accordion--active')
				}

			});
		});

	};
	accordions('.accordion');


		//---------------slider--plan----------
		var mySwiper = new Swiper('.sport__slider', {
			slidesPerView: 1,
			spaceBetween: 25,
			navigation: {
				nextEl: '.sport__next',
				prevEl: '.sport__prev',
			},
			breakpoints: {
				576: {
					slidesPerView: 2,
					spaceBetween: 25
				},

				767: {
					slidesPerView: 3,
					spaceBetween: 25
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 25
				},
			}
		});

		//---------------slider--plan----------
		var mySwiper = new Swiper('.pdf__slider', {
			slidesPerView: 1,
			spaceBetween: 25,
			loop: true,
			// pagination: {
			// 	el: '.pdf__pagination',
			// 	clickable: 'true',
			// },
			navigation: {
				nextEl: '.pdf__next',
				prevEl: '.pdf__prev',
			},
			breakpoints: {
				1200: {
					slidesPerView: 5,
					spaceBetween: 18
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 18
				},
				767: {
					slidesPerView: 3,
					spaceBetween: 18
				},
				420: {
					slidesPerView: 2,
					spaceBetween: 18
				},
			}
		});

		//---------------slider--plan----------
		var mySwiper = new Swiper('.service__slider', {
			slidesPerView: 2,
			spaceBetween: 25,
			// loop: true,
			// pagination: {
			// 	el: '.pdf__pagination',
			// 	clickable: 'true',
			// },
			navigation: {
				nextEl: '.service__next',
				prevEl: '.service__prev',
			},
			breakpoints: {
				350: {
					slidesPerView: 2,
					spaceBetween: 18
				},
				576: {
					slidesPerView: 3,
					spaceBetween: 18
				},
				767: {
					slidesPerView: 4,
					spaceBetween: 18
				},
				992: {
					slidesPerView: 5,
					spaceBetween: 18
				},
			}
		});

	//----------------------SLIDER-hero----------------------
		// var mySwiper = new Swiper('.hero__slider', {
		// 	slidesPerView: 1,
		// 	spaceBetween: 30,
		// 	loop: true,
		// 	effect: 'fade',
		// 	autoplay: {
		// 		delay: 5000,
		// 	},
		// 	pagination: {
		// 		el: '.hero__pagination',
		// 		clickable: 'true',
		// 	},
		// 	navigation: {
		// 		nextEl: '.hero__next',
		// 		prevEl: '.hero__prev',
		// 	},
		// 	breakpoints: {
		// 		320: {
		// 			slidesPerView: 2,
		// 			spaceBetween: 20
		// 		},
		// 	}
		// });

	//----------------------SCROLL-----------------------
		const scrollTo = (scrollTo) => {
			let list = document.querySelector(scrollTo);
			list = '.' + list.classList[0]  + ' li a[href^="#"';
	
			document.querySelectorAll(list).forEach(link => {
	
				link.addEventListener('click', function(e) {
						e.preventDefault();
						const scrollMenu = document.querySelector(scrollTo);
	
						let href = this.getAttribute('href').substring(1);
	
						const scrollTarget = document.getElementById(href);
	
						// const topOffset = scrollMenu.offsetHeight;
						const topOffset = 70;
						const elementPosition = scrollTarget.getBoundingClientRect().top;
						const offsetPosition = elementPosition - topOffset;
	
						window.scrollBy({
								top: offsetPosition,
								behavior: 'smooth'
						});
	
						
						let button = document.querySelector('.hamburger'),
								nav = document.querySelector('.header__nav'),
								header = document.querySelector('.header');
	
						button.classList.remove('hamburger--active');
						nav.classList.remove('header__nav--active');
						header.classList.remove('header--menu');
				});
			});
		};
		// scrollTo('.header__nav');

	//----------------------HAMBURGER-----------------------
		const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
			const button = document.querySelector(hamburgerButton),
						nav = document.querySelector(hamburgerNav),
						header = document.querySelector(hamburgerHeader);
	
			button.addEventListener('click', (e) => {
				button.classList.toggle('hamburger--active');
				nav.classList.toggle('header__nav--active');
				header.classList.toggle('header--menu');
			});
	
		};
		hamburger('.hamburger', '.header__nav', '.header');

		//----------------------TABS-JS----------------------
		const tabs = (headerSelector, tabSelector, contentSelector, activeClass) => {
			const header = document.querySelector(headerSelector),
						tab = document.querySelectorAll(tabSelector),
						content = document.querySelectorAll(contentSelector);

			if (header) {
				if (tab) {
					if (content) {
						function hideTabContent() {
							content.forEach(item => {
								item.style.display = "none";
							});
			
							tab.forEach(item => {
								item.classList.remove(activeClass);
							});
						}
			
						function showTabContent(i = 0) {
							content[i].style.display = "block";
							tab[i].classList.add(activeClass);
						}
						hideTabContent();
						showTabContent();
						header.addEventListener('click', (e) => {
							const target = e.target;
							if (target && 
								(target.classList.contains(tabSelector.replace(/\./, '')) || 
								target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
								tab.forEach((item, i) => {
									if (target == item || target.parentNode == item) {
										hideTabContent();
										showTabContent(i);
									}
								});
							}
						});
					}
				}
			}


		};
		tabs('.tabs', '.tabs__item', '.tabs__wrap', 'active');

		//----------------------TABS-JS----------------------
		const tabss = (headerSelector, tabSelector, contentSelector, activeClass) => {
			const header = document.querySelector(headerSelector),
						tab = document.querySelectorAll(tabSelector),
						content = document.querySelectorAll(contentSelector);

			if (header) {
				if (tab) {
					if (content) {
						function hideTabContent() {
							content.forEach(item => {
								item.style.display = "none";
							});
			
							tab.forEach(item => {
								item.classList.remove(activeClass);
							});
						}
			
						function showTabContent(i = 0) {
							content[i].style.display = "block";
							tab[i].classList.add(activeClass);
						}
						hideTabContent();
						showTabContent();
						header.addEventListener('click', (e) => {
							const target = e.target;
							if (target && 
								(target.classList.contains(tabSelector.replace(/\./, '')) || 
								target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
								tab.forEach((item, i) => {
									if (target == item || target.parentNode == item) {
										hideTabContent();
										showTabContent(i);
									}
								});
							}
						});
					}
				}
			}


		};
		tabss('.tabss', '.tabss__item', '.tabss__wrap', 'actives');

		


});
	