<?php

PLS_Style::add(array( 
		"name" => __("Listing Styles", 'tampa'),
		"type" => "heading"));

		PLS_Style::add(array( 
				"name" => __("General Listing Styles", 'tampa'),
				"desc" => "",
				"type" => "info"));

				PLS_Style::add(array(
						"name" => __("Listing Address Link", 'tampa'),
						"desc" => "",
						"id" => "listing_address",
						"selector" => ".list-unit h4 a, .listing-item h4 a:visited, .list-unit .info-bt",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Listing Address link on hover", 'tampa'),
						"desc" => "",
						"id" => "listing_address_hover",
						"selector" => ".list-unit h4 a:hover, .list-unit .info-bt:hover",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Listing Address City/State", 'tampa'),
						"desc" => "",
						"id" => "listing_address_city_state",
						"selector" => ".list-unit p.area",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Listing Image Border", 'tampa'),
						"desc" => "",
						"id" => "listing_image_border",
						"selector" => ".list-unit img",
						"type" => "border"));

				PLS_Style::add(array(
						"name" => __("Listing Price Typography", 'tampa'),
						"desc" => "",
						"id" => "listing_price_typography",
						"selector" => ".list-unit .lu-price p.price",
						"type" => "typography"));

					PLS_Style::add(array(
							"name" => __("Listing Price Background", 'tampa'),
							"desc" => "",
							"id" => "listing_price_background",
							"selector" => ".list-unit .lu-price p.price",
							"type" => "background"));

				PLS_Style::add(array(
						"name" => __("Listing 'See Details' Button", 'tampa'),
						"desc" => "",
						"id" => "listing_see_details_button",
						"selector" => ".list-unit .details-bt",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Listing 'See Details' Button Background", 'tampa'),
						"desc" => "",
						"id" => "listing_see_details_button_background",
						"selector" => ".list-unit .details-bt",
						"type" => "background"));

				PLS_Style::add(array(
						"name" => __("Listing 'See Details' Button Border", 'tampa'),
						"desc" => "",
						"id" => "listing_see_details_button_border",
						"selector" => ".list-unit .details-bt",
						"type" => "border"));


		PLS_Style::add(array( 
				"name" => __("Single Property Styles", 'tampa'),
				"desc" => "",
				"type" => "info"));

				PLS_Style::add(array(
						"name" => __("Single Property Address", 'tampa'),
						"desc" => "",
						"id" => "single_property_address",
						"selector" => "body.single-property article.property-details p.state",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Single Property Main Image Caption Background", 'tampa'),
						"desc" => "",
						"id" => "single_property_main_image_caption_bg",
						"selector" => "body.single-property article.property-details p.state",
						"type" => "background"));

				PLS_Style::add(array(
						"name" => __("Single Property Price", 'tampa'),
						"desc" => "",
						"id" => "single_property_main_image_caption_price",
						"selector" => "body.single-property article.property-details p.state span.rent",
						"type" => "color"));

				PLS_Style::add(array(
						"name" => __("Single Property Caption Details", 'tampa'),
						"desc" => "",
						"id" => "single_property_main_image_caption_details",
						"selector" => "body.single-property article.property-details p.state span.details",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Single Property Description Text", 'tampa'),
						"desc" => "",
						"id" => "single_property_paragraph_text",
						"selector" => "body.single-property article.property-details .user-generated p",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Single Property Amenities List", 'tampa'),
						"desc" => "",
						"id" => "single_property_amenities_list",
						"selector" => "body.single-property article.property-details .user-generated ul li",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Single Property Gallery Image Border", 'tampa'),
						"desc" => "",
						"id" => "single_property_gallery_image_border",
						"selector" => "body.single-property aside #gallery img",
						"type" => "border"));

