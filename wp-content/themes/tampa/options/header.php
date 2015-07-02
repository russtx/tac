<?php 

PLS_Style::add(array( 
		"name" => __("Header Styles", 'tampa'),
		"type" => "heading"));
		
		PLS_Style::add(array(
				"name" => __("Site Title Typography", 'tampa'),
				"desc" => "",
				"id" => "header_title",
				"selector" => "header h1 a, header h1 a:visited",
				"type" => "typography"));

		PLS_Style::add(array(
				"name" => __("Site Title on hover", 'tampa'),
				"desc" => "",
				"id" => "header_title_hover",
				"selector" => "header h1 a:hover",
				"type" => "typography"));

			PLS_Style::add(array(
					"name" => __("Site Sub-Title Typography", 'tampa'),
					"desc" => "",
					"id" => "header_subtitle",
					"selector" => "header h2",
					"type" => "typography"));

			PLS_Style::add(array(
					"name" => __("Header Email Typography", 'tampa'),
					"desc" => "",
					"id" => "header_email_typo",
					"selector" => "header #contact p.email a, header #contact p.email a:visited",
					"type" => "typography"));

			PLS_Style::add(array(
					"name" => __("Header Phone Typography", 'tampa'),
					"desc" => "",
					"id" => "header_phone_typo",
					"selector" => "header #contact p.phone",
					"type" => "typography"));
