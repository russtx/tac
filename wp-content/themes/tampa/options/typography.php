<?php 

	PLS_Style::add(array( 
			"name" => __("Typography Options", 'tampa'),
			"type" => "heading"));

	PLS_Style::add(array(
			"name" => __("Paragraph Style Options", 'tampa'),
			"desc" => __("All the controls apply to all text on the page across the entire site. Your settings here will be overrided by more specific options you make below. For example, if you set the text color to be red here but below you set all headers to be blue - then your headers will be blue, while the rest of the text on your site will be blue.",'tampa'),
			"id" => "body.font",
			"std" => "",
			"type" => "typography"));

	PLS_Style::add(array(
			"name" => __("Normal Link Styles", 'tampa'),
			"desc" => __("This is the base font style across your entire website.", 'tampa'),
			"id" => "body.a",
			"std" => "",
			"type" => "typography"));

	PLS_Style::add(array(
			"name" => __("Visited Link Styles", 'tampa'),
			"desc" => __("This is the base font style across your entire website.", 'tampa'),
			"id" => "pls-visited-link-styles",
			"selector" => "body.a:visited",
			"type" => "typography"));

	PLS_Style::add(array(
			"name" => __("Hover Link Styles", 'tampa'),
			"desc" => __("This is the base font style across your entire website.", 'tampa'),
			"id" => "body.a:hover",
			"std" => "",
			"type" => "typography"));

	PLS_Style::add(array(
			"name" => __("H1 Styles", 'tampa'),
			"desc" => __("This style will apply to all the h1s", 'tampa'),
			"id" => "h1.styles",
			"selector" => "#logo h1 a",
			"std" => "",
			"type" => "typography"));

	PLS_Style::add(array( 
				"name" =>  __("H3 Section Titles", 'tampa'),
				"desc" => __("Change the default background of the navigation bar. The default is orange.", 'tampa'),
				"id" => "nav_background",
				"std" => "",
				"selector" => "h3",
				"type" => "typography"));

        // PLS_Style::add(array(
        //     "name" => __("H2 Styles", 'tampa'),
        //     "desc" => __("This style will apply to all the h1s", 'tampa'),
        //     "id" => "h2.styles",
        //     "selector" => "#logo h2",
        //     "std" => "",
        //     "type" => "typography"));
        // 
        // PLS_Style::add(array( 
        //     "name" => __("H3 Styles", 'tampa'),
        //     "desc" => __("This style will apply to all the h1s", 'tampa'),
        //     "id" => "h3.styles",
        //     "selector" => "h3",
        //     "std" => "",
        //     "type" => "typography"));
        // 
        // PLS_Style::add(array( 
        //     "name" => __("H4 Styles", 'tampa'),
        //     "desc" => __("This style will apply to all the h1s", 'tampa'),
        //     "id" => "h4.styles",
        //     "selector" => "h4",
        //     "std" => "",
        //     "type" => "typography"));
        // 
        // PLS_Style::add(array(
        //     "name" => __("H5 Styles", 'tampa'),
        //     "desc" => __("This style will apply to all the h1s", 'tampa'),
        //     "id" => "h5.styles",
        //     "selector" => "h5",
        //     "std" => array('size' => '','face' => '','style' => '','color' => ''),
        //     "type" => "typography"));