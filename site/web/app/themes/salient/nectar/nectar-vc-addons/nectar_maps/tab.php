<?php 
	
	$vc_is_wp_version_3_6_more = version_compare(preg_replace('/^([\d\.]+)(\-.*$)/', '$1', get_bloginfo('version')), '3.6') >= 0;
	
	return array(
	  "name" => __("Tab", "js_composer"),
	  "base" => "tab",
	  "allowed_container_element" => 'vc_row',
	  "is_container" => true,
	  "content_element" => false,
	  "params" => array(
	    array(
	      "type" => "textfield",
	      "heading" => __("Title", "js_composer"),
	      "param_name" => "title",
	      "description" => __("Tab title.", "js_composer")
	    ),
			array(
				'type' => 'dropdown',
				'heading' => __( 'Icon library', 'js_composer' ),
				'value' => array(
					__( 'None', 'js_composer' ) => 'none',
					__( 'Font Awesome', 'js_composer' ) => 'fontawesome',
					__( 'Iconsmind', 'js_composer' ) => 'iconsmind',
					__( 'Steadysets', 'js_composer' ) => 'steadysets',
					__( 'Linecons', 'js_composer' ) => 'linecons',
				),
				'save_always' => true,
				'param_name' => 'icon_family',
				'description' => __( 'Select icon library.', 'js_composer' ),
			),
			array(
		      "type" => "iconpicker",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "icon_fontawesome",
		      "settings" => array( "iconsPerPage" => 4000),
		      "dependency" => array('element' => "icon_family", 'emptyIcon' => true, 'value' => 'fontawesome'),
		      "description" => __("Select icon from library.", "js_composer")
		    ),
		    array(
		      "type" => "iconpicker",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "icon_iconsmind",
		      "settings" => array( 'type' => 'iconsmind', 'emptyIcon' => true, "iconsPerPage" => 4000),
		      "dependency" => array('element' => "icon_family", 'value' => 'iconsmind'),
		      "description" => __("Select icon from library.", "js_composer")
		    ),
		    array(
		      "type" => "iconpicker",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "icon_linecons",
		      "settings" => array( 'type' => 'linecons', 'emptyIcon' => true, "iconsPerPage" => 4000),
		      "dependency" => array('element' => "icon_family", 'value' => 'linecons'),
		      "description" => __("Select icon from library.", "js_composer")
		    ),
		    array(
		      "type" => "iconpicker",
		      "heading" => __("Icon", "js_composer"),
		      "param_name" => "icon_steadysets",
		      "settings" => array( 'type' => 'steadysets', 'emptyIcon' => true, "iconsPerPage" => 4000),
		      "dependency" => array('element' => "icon_family", 'value' => 'steadysets'),
		      "description" => __("Select icon from library.", "js_composer")
		    ),
	    array(
	      "type" => "tab_id",
	      "heading" => __("Tab ID", "js_composer"),
	      "param_name" => "id"
	    )
	  ),
	  'js_view' => ($vc_is_wp_version_3_6_more ? 'VcTabView' : 'VcTabView35')
	);

?>