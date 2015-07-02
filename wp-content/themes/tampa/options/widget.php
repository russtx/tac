<?php 

PLS_Style::add(array( 
		"name" => __("Widget Styles", 'tampa'),
		"type" => "heading"));


		PLS_Style::add(array(
				"name" => __("Sidebar Search and Contact Widgets' label typography", 'tampa'),
				"desc" => "",
				"id" => "widget_search_label_typography",
				"selector" => "aside .pls-quick-search label, aside .common-side-cont label",
				"type" => "typography"));

		PLS_Style::add(array(
				"name" => __("Sidebar Search and Contact Widgets' background", 'tampa'),
				"desc" => "",
				"id" => "widget_search_background",
				"selector" => "aside .pls-quick-search #form-container, aside .common-side-cont",
				"type" => "background"));

		PLS_Style::add(array(
				"name" => __("Sidebar Buttons", 'tampa'),
				"desc" => "",
				"id" => "aside_search_button",
				"selector" => "aside .pls-quick-search input#search, aside .placester_contact input[type='submit'], aside input#searchsubmit",
				"type" => "typography"));

		PLS_Style::add(array(
				"name" => __("Sidebar Buttons' Background", 'tampa'),
				"desc" => "",
				"id" => "aside_search_button_background",
				"selector" => "aside .pls-quick-search input#search, aside .placester_contact input[type='submit'], aside input#searchsubmit",
				"type" => "background"));

		PLS_Style::add(array(
				"name" => __("Sidebar Buttons' Border", 'tampa'),
				"desc" => "",
				"id" => "aside_search_button_border",
				"selector" => "aside .pls-quick-search input#search, aside .placester_contact input[type='submit'], aside input#searchsubmit",
				"type" => "border"));


		PLS_Style::add(array(
				"name" => __("Customize Placester Widget", 'tampa'),
				"desc" => __("These options will customize the sidebar agent widget.", 'tampa'),
				"type" => "info"));

				PLS_Style::add(array(
						"name" => __("Widget Primary Typography", 'tampa'),
						"desc" => "",
						"id" => "widget_primary_typography",
						"selector" => ".widget .featured-slot h4 a, .widget .featured-slot h4 a:visited, .widget .agent h4, .widget #map-widget p.address",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Widget Primary Typography Anchor Hover", 'tampa'),
						"desc" => "",
						"id" => "widget_primary_typography_on_hover",
						"selector" => ".widget .featured-slot h4 a:hover",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Widget Secondary Typography", 'tampa'),
						"desc" => "",
						"id" => "widget_secondary_typography",
						"selector" => ".widget .office, .widget .rent-label span, .widget .agent a, .widget .agent a:visited",
						"type" => "typography"));

					PLS_Style::add(array(
							"name" => __("Widget Secondary Typography Anchor Hover", 'tampa'),
							"desc" => "",
							"id" => "widget_secondary_typography_on_hover",
							"selector" => ".widget .agent a:hover",
							"type" => "typography"));

						PLS_Style::add(array(
								"name" => __("Widget Image Border", 'tampa'),
								"desc" => "",
								"id" => "widget_listings_learn_more_link_hover",
								"selector" => ".widget .agent img, .widget .pls-listings img",
								"type" => "border"));
