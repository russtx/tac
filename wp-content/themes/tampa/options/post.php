<?php

PLS_Style::add(array( 
		"name" => __("Blog Options", 'tampa'),
		"type" => "heading"));


		PLS_Style::add(array( 
				"name" => __("Titles", 'tampa'),
				"desc" => "",
				"type" => "info"));

				PLS_Style::add(array(
						"name" => __("Blog Post Title", 'tampa'),
						"desc" => "",
						"selector" => ".post-slot h4 a, .post-slot h4 a:visited",
						"id" => "blog_post_title",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post Title on hover", 'tampa'),
						"desc" => "",
						"id" => "blog_post_title_hover",
						"selector" => ".post-slot h4 a:hover",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post Meta Data", 'tampa'),
						"desc" => "",
						"id" => "blog_post_meta",
						"selector" => ".post-slot .post-info",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post Text", 'tampa'),
						"desc" => "",
						"id" => "blog_post_text_1",
						"selector" => ".post-slot p, body.single-post article.post",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post Text Links", 'tampa'),
						"desc" => "",
						"id" => "blog_post_text_link",
						"selector" => ".post-slot a, .post-slot a:visited, body.single-post article.post a, body.single-post article.post a:visited",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post Links on hover", 'tampa'),
						"desc" => "",
						"id" => "blog_post_text_link_hover",
						"selector" => ".post-slot p a:hover, body.single-post article.post p a:hover",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post 'Continue Reading' link", 'tampa'),
						"desc" => "",
						"id" => "blog_post_more_link",
						"selector" => ".post-slot a.read-more, .post-slot a.read-more:visited",
						"type" => "typography"));

				PLS_Style::add(array(
						"name" => __("Blog Post 'Continue Reading' link on hover", 'tampa'),
						"desc" => "",
						"id" => "blog_post_more_link_hover",
						"selector" => ".post-slot a.read-more:hover",
						"type" => "typography"));
