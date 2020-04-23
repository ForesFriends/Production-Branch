<?php

	$kindergarten_education_first_color = get_theme_mod('kindergarten_education_first_color');

	$custom_css ='';
	/*-------------- Global First Color -----------------*/

	if($kindergarten_education_first_color != false){
		$custom_css .='input[type="submit"], .primary-navigation ul ul a, .postbtn a:hover, .blog-section .section-title a:after, .datebox, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #comments a.comment-reply-link, #comments a.comment-reply-link, #sidebar h3, #sidebar .tagcloud a, .widget_calendar tbody a, .page-content .read-moresec a.button, .copyright-wrapper , .footer-wp h3:after , .footer-wp input[type="submit"], .footer-wp .tagcloud a, .pagination span, .pagination a{';
				$custom_css .='background-color: '.esc_html($kindergarten_education_first_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_first_color != false){
		$custom_css .='a, .page-template-custom-home-page .search-box span i, .page-template-custom-home-page #header .logo a, nav.navigation.post-navigation a , .metabox a:hover, #sidebar ul li a, .footer-wp li a:hover, h2.entry-title, h2.page-title{';
				$custom_css .='color: '.esc_html($kindergarten_education_first_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_first_color != false){
		$custom_css .='.postbtn a:hover, .datebox, .page-content .read-moresec a.button {';
				$custom_css .='border-color: '.esc_html($kindergarten_education_first_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_first_color != false){
		$custom_css .='.copyright-wrapper{';
				$custom_css .='border-top-color: '.esc_html($kindergarten_education_first_color).';';
		$custom_css .='}';
	}

	/*------------------------------ Global Second Color ---------------------*/

	$kindergarten_education_second_color = get_theme_mod('kindergarten_education_second_color');

	if($kindergarten_education_second_color != false){
		$custom_css .='.more-btn a, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #comments input[type="submit"].submit:hover, .page-content .read-moresec a.button:hover, .footer-wp .tagcloud a:hover , .pagination a:hover, .pagination .current, input[type="submit"]:hover, .more-btn a, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #comments input[type="submit"].submit:hover, .page-content .read-moresec a.button:hover, .footer-wp .tagcloud a:hover, .pagination a:hover, .pagination .current, input[type="submit"]:hover , #sidebar .tagcloud a:hover{';
				$custom_css .='background-color: '.esc_html($kindergarten_education_second_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_second_color != false){
		$custom_css .='.more-btn a:hover, nav.navigation.post-navigation a:hover, .footer-wp .textwidget p a:hover, .testbutton a:hover, .more-btn a:hover, nav.navigation.post-navigation a:hover, .footer-wp .textwidget p a:hover, .testbutton a:hover{';
				$custom_css .='color: '.esc_html($kindergarten_education_second_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_second_color != false){
		$custom_css .='.more-btn a, .page-content .read-moresec a.button:hover, .more-btn a, .page-content .read-moresec a.button:hover{';
				$custom_css .='border-color: '.esc_html($kindergarten_education_second_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_second_color != false){
		$custom_css .='{';
				$custom_css .='border-top-color: '.esc_html($kindergarten_education_second_color).';';
		$custom_css .='}';
	}

	/*------------------------------ Global Third Color ---------------------*/

	$kindergarten_education_third_color = get_theme_mod('kindergarten_education_third_color');

	if($kindergarten_education_third_color != false){
		$custom_css .='.primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .inner-box-cat-tag{';
				$custom_css .='background-color: '.esc_html($kindergarten_education_third_color).';';
		$custom_css .='}';
	}
	if($kindergarten_education_third_color != false){
		$custom_css .='.primary-navigation ul ul a, #sidebar ul, #sidebar .widget_shopping_cart_content, #sidebar .tagcloud, #sidebar .textwidget,#sidebar form, #sidebar #calendar_wrap, .inner-box{';
				$custom_css .='border-color: '.esc_html($kindergarten_education_third_color).';';
		$custom_css .='}';
	}

	/*---------- Global Fourth Color ----------------*/

	$kindergarten_education_fourth_color = get_theme_mod('kindergarten_education_fourth_color');

	if($kindergarten_education_fourth_color != false){
		$custom_css .='.inner-box{';
				$custom_css .='background-color: '.esc_html($kindergarten_education_fourth_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'kindergarten_education_width_layout_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_lay == 'Container Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page #header{';
			$custom_css .='width: 98%';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 768px){
		.page-template-custom-home-page #header{';
		$custom_css .='width:100%;';
		$custom_css .='} }';
		$custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 1000px){
		.page-template-custom-home-page #header{';
		$custom_css .='width:97%;';
		$custom_css .='} }';
	}else if($theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page header{';
			$custom_css .='position: relative';
		$custom_css .='}';
	}

	/*-----------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'kindergarten_education_slider_content_layout','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:left; left:15%; right:40%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:center; left:30%; right:30%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:right; left:40%; right:15%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'kindergarten_education_slider_opacity','0.7');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

		/*-------------- Woocommerce Button  -------------*/

		$kindergarten_education_woocommerce_button_padding_top = get_theme_mod('kindergarten_education_woocommerce_button_padding_top',15);
		if($kindergarten_education_woocommerce_button_padding_top != false){
			$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='padding-top: '.esc_html($kindergarten_education_woocommerce_button_padding_top).'px; padding-bottom: '.esc_html($kindergarten_education_woocommerce_button_padding_top).'px;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_button_padding_right = get_theme_mod('kindergarten_education_woocommerce_button_padding_right',15);
		if($kindergarten_education_woocommerce_button_padding_right != false){
			$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='padding-left: '.esc_html($kindergarten_education_woocommerce_button_padding_right).'px; padding-right: '.esc_html($kindergarten_education_woocommerce_button_padding_right).'px;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_button_border_radius = get_theme_mod('kindergarten_education_woocommerce_button_border_radius',30);
		if($kindergarten_education_woocommerce_button_border_radius != false){
			$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
				$custom_css .='border-radius: '.esc_html($kindergarten_education_woocommerce_button_border_radius).'px;';
			$custom_css .='}';
		}

		$kindergarten_education_related_product_enable = get_theme_mod('kindergarten_education_related_product_enable',true);

		if($kindergarten_education_related_product_enable == false){
			$custom_css .='.related.products{';
				$custom_css .='display: none;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_product_border_enable = get_theme_mod('kindergarten_education_woocommerce_product_border_enable',true);

		if($kindergarten_education_woocommerce_product_border_enable == false){
			$custom_css .='.products li{';
				$custom_css .='border: none;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_product_padding_top = get_theme_mod('kindergarten_education_woocommerce_product_padding_top',10);
		if($kindergarten_education_woocommerce_product_padding_top != false){
			$custom_css .='.products li{';
				$custom_css .='padding-top: '.esc_html($kindergarten_education_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_html($kindergarten_education_woocommerce_product_padding_top).'px !important;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_product_padding_right = get_theme_mod('kindergarten_education_woocommerce_product_padding_right',10);
		if($kindergarten_education_woocommerce_product_padding_right != false){
			$custom_css .='.products li{';
				$custom_css .='padding-left: '.esc_html($kindergarten_education_woocommerce_product_padding_right).'px !important; padding-right: '.esc_html($kindergarten_education_woocommerce_product_padding_right).'px !important;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_product_border_radius = get_theme_mod('kindergarten_education_woocommerce_product_border_radius');
		if($kindergarten_education_woocommerce_product_border_radius != false){
			$custom_css .='.products li{';
				$custom_css .='border-radius: '.esc_html($kindergarten_education_woocommerce_product_border_radius).'px;';
			$custom_css .='}';
		}

		$kindergarten_education_woocommerce_product_box_shadow = get_theme_mod('kindergarten_education_woocommerce_product_box_shadow');
		if($kindergarten_education_woocommerce_product_box_shadow != false){
			$custom_css .='.products li{';
				$custom_css .='box-shadow: '.esc_html($kindergarten_education_woocommerce_product_box_shadow).'px '.esc_html($kindergarten_education_woocommerce_product_box_shadow).'px '.esc_html($kindergarten_education_woocommerce_product_box_shadow).'px #eee;';
			$custom_css .='}';
		}

	// footer setting

	$kindergarten_education_footer_bg_color = get_theme_mod('kindergarten_education_footer_bg_color');
	if($kindergarten_education_footer_bg_color != false){
		$custom_css .='.footer-wp{';
			$custom_css .='background-color: '.esc_html($kindergarten_education_footer_bg_color).';';
		$custom_css .='}';
	}

	$kindergarten_education_footer_bg_image = get_theme_mod('kindergarten_education_footer_bg_image');
	if($kindergarten_education_footer_bg_image != false){
		$custom_css .='.footer-wp{';
			$custom_css .='background: url('.esc_html($kindergarten_education_footer_bg_image).');';
		$custom_css .='}';
	}

	/*------------- Back to Top  -------------------*/

	$kindergarten_education_back_to_top_border_radius = get_theme_mod('kindergarten_education_back_to_top_border_radius');
	if($kindergarten_education_back_to_top_border_radius != false){
		$custom_css .='#scrollbutton i{';
			$custom_css .='border-radius: '.esc_html($kindergarten_education_back_to_top_border_radius).'px;';
		$custom_css .='}';
	}

	$kindergarten_education_scroll_icon_font_size = get_theme_mod('kindergarten_education_scroll_icon_font_size', 22);
	if($kindergarten_education_scroll_icon_font_size != false){
		$custom_css .='#scrollbutton i{';
			$custom_css .='font-size: '.esc_html($kindergarten_education_scroll_icon_font_size).'px;';
		$custom_css .='}';
	}

	$kindergarten_education_top_bottom_scroll_padding = get_theme_mod('kindergarten_education_top_bottom_scroll_padding', 12);
	if($kindergarten_education_top_bottom_scroll_padding != false){
		$custom_css .='#scrollbutton i{';
			$custom_css .='padding-top: '.esc_html($kindergarten_education_top_bottom_scroll_padding).'px; padding-bottom: '.esc_html($kindergarten_education_top_bottom_scroll_padding).'px;';
		$custom_css .='}';
	}

	$kindergarten_education_left_right_scroll_padding = get_theme_mod('kindergarten_education_left_right_scroll_padding', 17);
	if($kindergarten_education_left_right_scroll_padding != false){
		$custom_css .='#scrollbutton i{';
			$custom_css .='padding-left: '.esc_html($kindergarten_education_left_right_scroll_padding).'px; padding-right: '.esc_html($kindergarten_education_left_right_scroll_padding).'px;';
		$custom_css .='}';
	}


