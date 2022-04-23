<?php

	add_action('init', 'depoimento_register');
	function depoimento_register() {
			$labels = array(
					'name'                  => __('testimonies'),
					'singular_name'         => __('Depoimento'),
					'add_new'               => __('Adicionar nova depoimento'),
					'add_new_item'          => __('Adicionar nova depoimento'),
					'edit_item'             => __('Editar depoimento'),
					'new_item'              => __('Novo depoimento'),
					'view_item'             => __('Ver depoimento'),
					'search_items'          => __('Buscar testimonies'),
					'not_found'             => __('Sem resultados'),
					'not_found_in_trash'    => __('Sem resultados na lixeira'),
					'parent_item_colon'     => '',
					'menu_name'             => __('testimonies')
			);
			$args = array(
					'labels'                => $labels,
					'public'                => true,
					'show_ui'               => true,
					'capability_type'       => 'post',
					'hierarchical'          => true,
					'rewrite'               => array('slug' => 'testimonies'),
					'supports'              => array('title', 'thumbnail'),
					'menu_position'         => null,
					'menu_icon'             => 'dashicons-businessperson'
			);
			register_post_type('testimonies', $args);
	}

	add_action('init', 'slide_register');
	function slide_register() {
			$labels = array(
					'name'                  => __('Slides'),
					'singular_name'         => __('Slide'),
					'add_new'               => __('Adicionar novo slide'),
					'add_new_item'          => __('Adicionar novo slide'),
					'edit_item'             => __('Editar slide'),
					'new_item'              => __('Novo slide'),
					'view_item'             => __('Ver slide'),
					'search_items'          => __('Buscar slide'),
					'not_found'             => __('Sem resultados'),
					'not_found_in_trash'    => __('Sem resultados na lixeira'),
					'parent_item_colon'     => '',
					'menu_name'             => __('Slides')
			);
			$args = array(
					'labels'                => $labels,
					'public'                => true,
					'show_ui'               => true,
					'capability_type'       => 'post',
					'hierarchical'          => true,
					'rewrite'               => array('slug' => 'slide'),
					'supports'              => array('title', 'thumbnail'),
					'menu_position'         => null,
					'menu_icon'             => 'dashicons-slides'
			);
			register_post_type('slide', $args);
	}

	if( function_exists('acf_add_local_field_group') ):
		acf_add_local_field_group(array(
			'key' => 'group_625a1413bdc95',
			'title' => 'Grupo de campos para testimonies',
			'fields' => array(
				array(
					'key' => 'field_625a1423994a9',
					'label' => 'Depoimento',
					'name' => 'contant',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_625a142d994aa',
					'label' => 'Nome da pessoa',
					'name' => 'person_name',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_625a1435994ab',
					'label' => 'Empresa',
					'name' => 'company',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'testimonies',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'page_attributes',
				10 => 'categories',
				11 => 'tags',
				12 => 'send-trackbacks',
			),
			'active' => true,
			'description' => '',
		));

		acf_add_local_field_group(array(
			'key' => 'group_625c64e847750',
			'title' => 'Grupo de campos para slides',
			'fields' => array(
				array(
					'key' => 'field_625c64f68b655',
					'label' => 'Subtítulo',
					'name' => 'subtitle',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_625c64fb8b656',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'page_link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'post_type' => '',
					'taxonomy' => '',
					'allow_null' => 0,
					'allow_archives' => 1,
					'multiple' => 0,
				),
				array(
					'key' => 'field_625c650b8b657',
					'label' => 'Imagem',
					'name' => 'image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'url',
					'preview_size' => 'full',
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
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'slide',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'permalink',
				1 => 'the_content',
				2 => 'excerpt',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'slug',
				7 => 'author',
				8 => 'format',
				9 => 'page_attributes',
				10 => 'featured_image',
				11 => 'categories',
				12 => 'tags',
				13 => 'send-trackbacks',
			),
			'active' => true,
			'description' => '',
		));
	endif;

?>