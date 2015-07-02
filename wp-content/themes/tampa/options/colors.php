<?php

PLS_Style::add(array( 
		"name" => __('Color Styles', 'tampa'),
		"type" => "heading"));

		PLS_Style::add(array(
				"name" =>  __('Top Background', 'tampa'),
				"desc" => __('Change the site\'s top background.', 'tampa'),
				"id" => "top_background",
				"selector" => "#top-bg, footer #copyright",
				"type" => "background"));

		PLS_Style::add(array( 
				"name" =>  __('Site Background', 'tampa'),
				"desc" => __('Change the site\'s background.', 'tampa'),
				"id" => "site_background",
				"selector" => "body, header #contact",
				"type" => "background"));

		PLS_Style::add(array(
				"name" =>  __('Minor Titles', 'tampa'),
				"desc" => __('Change the site\'s minor titles.', 'tampa'),
				"id" => "h3_titles",
				"selector" => "h3, .inner h2",
				"type" => "typography"));

		PLS_Style::add(array( 
				"name" =>  __('Inner Background', 'tampa'),
				"desc" => __('Change the site\'s inner background.', 'tampa'),
				"id" => "inner_background",
				"selector" => ".inner",
				"type" => "background"));

