<?php
	function hardinge_wp_customizer_shihab($wp_customize){
		//Banner section
		$wp_customize->add_section('banner',array(
				'title' => __('Homepage banner', 'hardinge'),
				'description' => sprintf(__('Banner options:', 'hardinge')),
				'pririty' => 130

			));

    $wp_customize->add_setting('banner_image', array(
      'default'   => get_bloginfo('template_directory').'/template-assets/img/intro-bg.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
      'label'   => __('Banner image', 'hardinge'),
      'section' => 'banner',
      'settings' => 'banner_image',
      'priority'  => 1
    )));

	    $wp_customize->add_setting('banner_heading', array(
	      'default'   => _x('Hardinge theme for WordPress', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	    $wp_customize->add_control('banner_heading', array(
	      'label'   => __('Heading', 'hardinge'),
	      'section' => 'banner',
	      'priority'  => 2
	    ));

    $wp_customize->add_setting('banner_text', array(
      'default'   => _x('Developed by Shihab Ahmed', 'hardinge'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('banner_text', array(
      'label'   => __('Text', 'hardinge'),
      'section' => 'banner',
      'priority'  => 3
    ));


    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('#', 'hardinge'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'hardinge'),
      'section' => 'banner',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read more', 'hardinge'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'hardinge'),
      'section' => 'banner',
      'priority'  => 5
    ));


//About section
	$wp_customize->add_section('about',array(
				'title' => __('About section on front page', 'hardinge'),
				'description' => sprintf(__('About settings:', 'hardinge')),
				'pririty' => 130

			));

    $wp_customize->add_setting('about_image', array(
      'default'   => get_bloginfo('template_directory').'/template-assets/img/about.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_image', array(
      'label'   => __('About image', 'hardinge'),
      'section' => 'about',
      'settings' => 'about_image',
      'priority'  => 1
    )));

	 $wp_customize->add_setting('about_heading', array(
	      'default'   => _x('About us', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('about_heading', array(
	      'label'   => __('Heading', 'hardinge'),
	      'section' => 'about',
	      'priority'  => 2
	    ));


//Footer social section
	$wp_customize->add_section('footer_social',array(
				'title' => __('Footer social links', 'hardinge'),
				'description' => sprintf(__('Footer social links:', 'hardinge')),
				'pririty' => 130

			));

	 $wp_customize->add_setting('footer_facebook', array(
	      'default'   => _x('#', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('footer_facebook', array(
	      'label'   => __('Facebook', 'hardinge'),
	      'section' => 'footer_social',
	      'priority'  => 1
	    ));

	 $wp_customize->add_setting('footer_twitter', array(
	      'default'   => _x('#', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('footer_twitter', array(
	      'label'   => __('Twitter', 'hardinge'),
	      'section' => 'footer_social',
	      'priority'  => 2
	    ));

	 $wp_customize->add_setting('footer_google_plus', array(
	      'default'   => _x('#', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('footer_google_plus', array(
	      'label'   => __('Google Plus', 'hardinge'),
	      'section' => 'footer_social',
	      'priority'  => 3
	    ));

	 $wp_customize->add_setting('footer_pinterest', array(
	      'default'   => _x('#', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('footer_pinterest', array(
	      'label'   => __('Pinterest', 'hardinge'),
	      'section' => 'footer_social',
	      'priority'  => 4
	    ));

	 $wp_customize->add_setting('footer_youtube', array(
	      'default'   => _x('#', 'hardinge'),
	      'type'      => 'theme_mod'
	    ));

	 $wp_customize->add_control('footer_youtube', array(
	      'label'   => __('YouTube', 'hardinge'),
	      'section' => 'footer_social',
	      'priority'  => 5
	    ));

}

  add_action('customize_register', 'hardinge_wp_customizer_shihab');
