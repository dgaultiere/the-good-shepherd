<?php

/**
 * ACF field groups for theme
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_55f6684a8e2f5',
	'title' => 'Articles Page Options',
	'fields' => array (
		array (
			'key' => 'field_561aafc233859',
			'label' => 'Articles Search Title',
			'name' => 'articles_search_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Search by Title, Keyword, or Topic',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561aafee3385a',
			'label' => 'Articles Tag Cloud Title',
			'name' => 'articles_tags_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Browse by Tag',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_561ab0093385b',
			'label' => 'Articles Categories Section Title',
			'name' => 'articles_categories_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Browse by Category',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5625cbd41aa1a',
			'label' => 'Articles Categories Section',
			'name' => 'articles_categories',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => '',
			'max' => '',
			'layout' => 'row',
			'button_label' => 'Add Row',
			'sub_fields' => array (
				array (
					'key' => 'field_5625cbfd1aa1b',
					'label' => 'Link',
					'name' => 'articles_category_link',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_5625cc1e1aa1c',
					'label' => 'Image',
					'name' => 'articles_category_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_5625cc491aa1d',
					'label' => 'Title',
					'name' => 'articles_category_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => 80,
					'readonly' => 0,
					'disabled' => 0,
				),
				array (
					'key' => 'field_5625cc5e1aa1e',
					'label' => 'Description',
					'name' => 'articles_category_desc',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => 150,
					'rows' => 3,
					'new_lines' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
			),
			array (
				'key' => 'field_5777faa2ed5cb',
				'label' => 'Recent Articles Section Title',
				'name' => 'articles_recent_title',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Or view our most recent articles:',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
				'readonly' => 0,
				'disabled' => 0,
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-articles.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c6c12cecf19',
	'title' => 'Contact Page Options',
	'fields' => array (
		array (
			'key' => 'field_556bd5ae3cd32',
			'label' => 'Contact Form',
			'name' => 'contact_form',
			'type' => 'cf7',
			'instructions' => 'Select a contact form below to display it on this page. Contact forms can be created and configured from the Contact Form 7 plugin <a href="/wp-admin/admin.php?page=wpcf7">settings page</a>.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'disable' => array (
				0 => 0,
			),
		),
		array (
			'key' => 'field_556d32c7956af',
			'label' => 'Address Title',
			'name' => 'address_title',
			'type' => 'text',
			'instructions' => 'A title to display above the address/map.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_556d33b3956b0',
			'label' => 'Show Map',
			'name' => 'show_map',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show a map on this page',
			'default_value' => 0,
		),
		array (
			'key' => 'field_556becd83024a',
			'label' => 'Address Map',
			'name' => 'address_map',
			'type' => 'google_map',
			'instructions' => 'Enter an address to show on the map.',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_556d33b3956b0',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => 16,
			'height' => '',
		),
		array (
			'key' => 'field_556bed223024b',
			'label' => 'Address Label',
			'name' => 'address_label',
			'type' => 'textarea',
			'instructions' => 'Enter an address or text to display below the map.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-contact.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c6c12d04fb7',
	'title' => 'Default Page Options',
	'fields' => array (
		array (
			'key' => 'field_556b8a22eca9b',
			'label' => 'Header Background Type',
			'name' => 'header_background_type',
			'type' => 'radio',
			'instructions' => 'Use a custom background image or color on the header of this page.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'default' => 'Default',
				'image' => 'Image',
				'color' => 'Color',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'default',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_556bc0e81ab9b',
			'label' => 'Header Background Color',
			'name' => 'header_background_color',
			'type' => 'color_picker',
			'instructions' => 'Choose a color for the header background. If you\'re not sure, try one of these: <a href="https://flatuicolors.com/" target="_blank">www.flatuicolors.com</a>',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_556b8a22eca9b',
						'operator' => '==',
						'value' => 'color',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#9c9c9c',
		),
		array (
			'key' => 'field_55f63ea1608e8',
			'label' => 'Header Background Image',
			'name' => 'header_background_image',
			'type' => 'image',
			'instructions' => 'Choose an image for the header background. Recommended 1000x300 pixels minimum.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_556b8a22eca9b',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_5574bc037d69a',
			'label' => 'Text Style',
			'name' => 'text_style',
			'type' => 'radio',
			'instructions' => 'Select whether you would like to show serif (e.g., Times New Roman) or sans-serif (e.g., Arial) fonts for body text.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'serif' => 'Serif',
				'sans-serif' => 'Sans-serif',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'serif',
			'layout' => 'vertical',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
			array (
				'param' => 'page_template',
				'operator' => '!=',
				'value' => 'template-home.php',
			),
			array (
				'param' => 'page_type',
				'operator' => '!=',
				'value' => 'posts_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c80c03844e5',
	'title' => 'Footer Styling',
	'fields' => array (
		array (
			'key' => 'field_55c80c0becb79',
			'label' => 'Footer Background Color',
			'name' => 'footer_background_color',
			'type' => 'color_picker',
			'instructions' => 'Choose a background color for the footer area. Footer text is white, so darker colors are recommended.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#555555',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-footer',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c6c12d0d232',
	'title' => 'Homepage',
	'fields' => array (
		array (
			'key' => 'field_553f0c213cc48',
			'label' => 'Cover Title',
			'name' => 'cover_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f0c373cc49',
			'label' => 'Cover Subtitle',
			'name' => 'cover_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f0c443cc4a',
			'label' => 'Cover Photo',
			'name' => 'cover_photo',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'medium',
			'library' => 'all',
			'return_format' => 'url',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_562d302965e2e',
			'label' => 'Cover Text Color',
			'name' => 'cover_text_color',
			'type' => 'radio',
			'instructions' => 'Select whether the title and subtitle on the cover image should be white or black. <em>If your cover image is dark, choose white text. If your cover image is light, choose black text.</em>',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'white' => 'White',
				'black' => 'Black',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'white',
			'layout' => 'horizontal',
		),
		array (
			'key' => 'field_553f12412c105',
			'label' => 'Recent Articles Title',
			'name' => 'recent_articles_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Recent Articles',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f12822c106',
			'label' => 'Recent Articles Subtitle',
			'name' => 'recent_articles_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f1790964b5',
			'label' => 'About Title',
			'name' => 'about_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f179b964b6',
			'label' => 'About Subtitle',
			'name' => 'about_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_556a37ce650dd',
			'label' => 'About Link',
			'name' => 'about_link',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'taxonomy' => array (
			),
		),
		array (
			'key' => 'field_556a37ee650de',
			'label' => 'About Image',
			'name' => 'about_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'preview_size' => 'medium',
			'library' => 'all',
			'return_format' => 'url',
			'min_width' => 0,
			'min_height' => 0,
			'min_size' => 0,
			'max_width' => 0,
			'max_height' => 0,
			'max_size' => 0,
			'mime_types' => '',
		),
		array (
			'key' => 'field_556a3804650df',
			'label' => 'About Paragraph Heading',
			'name' => 'about_paragraph_heading',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_556a381b650e0',
			'label' => 'About Paragraph Content',
			'name' => 'about_paragraph_content',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f17a5964b7',
			'label' => 'Featured Title',
			'name' => 'featured_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_553f17b9964b8',
			'label' => 'Featured Subtitle',
			'name' => 'featured_subtitle',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-home.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
		1 => 'custom_fields',
	),
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c801c8c31d5',
	'title' => 'Site Info',
	'fields' => array (
		array (
			'key' => 'field_55c8010d4bca2',
			'label' => 'Favicon',
			'name' => 'favicon',
			'type' => 'image',
			'instructions' => 'Upload a favicon to show in the browser window and bookmarks. File must be ICO format. Use <a href="http://www.icoconverter.com/" target="_blank">www.icoconverter.com</a> to create an ICO file.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => 'ico',
		),
		array (
			'key' => 'field_55c8013b4bca3',
			'label' => 'Site Language',
			'name' => 'site_language',
			'type' => 'select',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'en-us' => 'English (US)',
				'es-mx' => 'Spanish (MX)',
			),
			'default_value' => array (
				'en-us' => 'English (US)',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c7f45deadc1',
	'title' => 'Social Links',
	'fields' => array (
		array (
			'key' => 'field_55c7f46266204',
			'label' => 'Enable Social Links',
			'name' => 'enable_social_links',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show social media icon links in the footer',
			'default_value' => 1,
		),
		array (
			'key' => 'field_55c7f48966205',
			'label' => 'Social Links Title',
			'name' => 'social_links_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55c7f46266204',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Connect with us',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 80,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_55c7f4b166206',
			'label' => 'Setup Social Links',
			'name' => 'setup_social_links',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55c7f46266204',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'min' => 1,
			'max' => 10,
			'layout' => 'table',
			'button_label' => 'Add Social Link',
			'sub_fields' => array (
				array (
					'key' => 'field_55c7f4c866207',
					'label' => 'Link URL',
					'name' => 'social_links_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_55c7f4e066208',
					'label' => 'Link Icon',
					'name' => 'social_links_icon',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'facebook' => 'Facebook',
						'twitter' => 'Twitter',
						'instagram' => 'Instagram',
						'google-plus' => 'Google+',
						'microphone' => 'Podcast',
						'envelope' => 'Email',
						'medium' => 'Medium',
						'pinterest' => 'Pinterest',
						'tumblr' => 'Tumblr',
						'vimeo' => 'Vimeo',
						'youtube-play' => 'YouTube',
						'yelp' => 'Yelp',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'placeholder' => '',
					'disabled' => 0,
					'readonly' => 0,
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-footer',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_5608a1fd42047',
	'title' => 'Subscription Page Options',
	'fields' => array (
		array (
			'key' => 'field_5608aa21d78eb',
			'label' => 'Signup Form Title',
			'name' => 'signup_form_title',
			'type' => 'text',
			'instructions' => 'Title to show above the signup form.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Subscribe to our email newsletter',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5608a20931b5f',
			'label' => 'Signup Form Code',
			'name' => 'signup_form_code',
			'type' => 'textarea',
			'instructions' => 'Paste the code for your mailing list signup form. This should be available from your provider (e.g. MailChimp).',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5608a2b331b60',
			'label' => 'Signup Form Placement',
			'name' => 'signup_form_placement',
			'type' => 'radio',
			'instructions' => 'Select where you would like the signup form to show up in relation to the page content.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'top' => 'Top',
				'bottom' => 'Bottom',
				'right' => 'Right',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'top',
			'layout' => 'vertical',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'template-subscribe.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c7f9e407705',
	'title' => 'Header Logo',
	'fields' => array (
		array (
			'key' => 'field_55c7fa03fc6a2',
			'label' => 'Use Logo Title',
			'name' => 'use_logo_title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show an image logo in the header in place of the site title',
			'default_value' => 0,
		),
		array (
			'key' => 'field_55c7fa6dfc6a3',
			'label' => 'Site Logo',
			'name' => 'site_logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55c7fa03fc6a2',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => 100,
			'min_height' => 50,
			'min_size' => '',
			'max_width' => 1000,
			'max_height' => 500,
			'max_size' => 1,
			'mime_types' => 'png, jpg, gif',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-header',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c80aeec726e',
	'title' => 'Theme Styling',
	'fields' => array (
		array (
			'key' => 'field_55c80b40e2730',
			'label' => 'Link Color',
			'name' => 'link_color',
			'type' => 'color_picker',
			'instructions' => 'Choose a color which will be used for links and buttons.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#3498db',
		),
		array (
			'key' => 'field_55c80af4e272f',
			'label' => 'Accent Color',
			'name' => 'accent_color',
			'type' => 'color_picker',
			'instructions' => 'Choose a color which will be used for accents like icons and symbols.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#3498db',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55f5f7ff3f75c',
	'title' => 'Header Navigation',
	'fields' => array (
		array (
			'key' => 'field_55f5f80d7165f',
			'label' => 'Navigation Highlight Color',
			'name' => 'nav_highlight',
			'type' => 'color_picker',
			'instructions' => 'Choose a color which will be the link highlight color in the top navigation menu.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#3498db',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-header',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_55c80bcc98663',
	'title' => 'Page Header Styling',
	'fields' => array (
		array (
			'key' => 'field_55f645418b6ae',
			'label' => 'Default Header Background',
			'name' => 'default_header_background',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'image' => 'Image',
				'color' => 'Color',
			),
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'color',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_55c80bd2226f0',
			'label' => 'Page Header Color',
			'name' => 'default_header_color',
			'type' => 'color_picker',
			'instructions' => 'Choose the default color for page headers that do not have an image background.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55f645418b6ae',
						'operator' => '==',
						'value' => 'color',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#3498db',
		),
		array (
			'key' => 'field_55f6451eb7a47',
			'label' => 'Page Header Image',
			'name' => 'default_header_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_55f645418b6ae',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options-header',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

acf_add_local_field_group(array (
	'key' => 'group_560e09fb0bdc7',
	'title' => 'Post Share Buttons',
	'fields' => array (
		array (
			'key' => 'field_560e09fb1056c',
			'label' => 'Enable Post Share Buttons',
			'name' => 'enable_post_share',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show sharing buttons at the bottom of each post',
			'default_value' => 1,
		),
		array (
			'key' => 'field_560e09fb1057f',
			'label' => 'Post Share Section Title',
			'name' => 'post_share_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_560e09fb1056c',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => 80,
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_560e1c53791a9',
			'label' => 'Post Share Buttons',
			'name' => 'post_share_buttons',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_560e09fb1056c',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'facebook' => 'Facebook',
				'twitter' => 'Twitter',
				'email' => 'Email',
			),
			'default_value' => array (
			),
			'layout' => 'vertical',
			'toggle' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
	'menu_order' => 3,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;

?>
