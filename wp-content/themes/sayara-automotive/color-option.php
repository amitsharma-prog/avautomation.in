<?php
	
	$sayara_automotive_theme_color_first = get_theme_mod('sayara_automotive_theme_color_first');

	$custom_css = '';

	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#masthead, .social-icon i:hover, #slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .readbutton a, .aboutbtn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-link a, .post-info, #sidebox h2, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .prev.page-numbers:focus,.prev.page-numbers:hover,.next.page-numbers:focus,.next.page-numbers:hover, button,input[type="button"],input[type="submit"]{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='a, .contact-details i, .main-navigation li li:focus > a,.main-navigation li li:hover > a, .main-navigation a:hover, .main-navigation ul ul li a{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .readbutton a:hover,.aboutbtn a:hover,.main-navigation ul ul,.post-link a:hover{';
			$custom_css .='border-color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='.site-footer ul li a:hover, #about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_first).'!important;';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_first).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Theme color option-------------------*/

	$sayara_automotive_theme_color_second = get_theme_mod('sayara_automotive_theme_color_second');

	if($sayara_automotive_theme_color_second != false){
		$custom_css .='button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus, .social-icon i, .search-box span i, .readbutton a:hover, #about .outside, .aboutbtn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .post-link a:hover, .site-footer, .main-navigation li li a:hover,	.main-navigation li li a.focus{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_second != false){
		$custom_css .='h1, h2, h3, h4, h5, h6, a:hover,a:active, .contact-details p.top-head, #slider span.carousel-control-prev-icon,#slider span.carousel-control-next-icon, #slider .inner_carousel h2, #slider .inner_carousel p, #about .about-text h3, h2.woocommerce-loop-product__title,.woocommerce div.product .product_title , .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce .products .star-rating span, .blogger h3 a{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_second != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebox h2, .readbutton a, .aboutbtn a, .post-link a,.blogger, .post-info{';
			$custom_css .='border-left-color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}