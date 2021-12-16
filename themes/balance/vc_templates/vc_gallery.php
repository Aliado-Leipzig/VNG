<?php
/**
 * Portfolio Gallery
 */
 	
	vc_map(array(
	    "base" => "gallerywrap",
	    "name" => __("Gallery Container"),
	    "icon" => "q4_galleryContainer",
	    "as_parent" => array('only' => 'galleryitem'),
	    "category" => __('Content'),
	    "show_settings_on_create" => false,
	    "is_container" => true,
	    "js_view" => 'VcColumnView'
	));
	
	vc_map(array(
	    "base" => "galleryitem",
	    "name" => __("Gallery Item"),
	    "as_child" => array('only' => 'gallerywrap'),
	    "content_element" => true,
	    "category" => __('Content'),
	    "show_settings_on_create" => true,
	    "icon" => "q4_galleryItem",
	    "params" => array(
	        array(
	            "type" => "dropdown",
	            "holder" => 'p',
	            "class" => "",
	            "heading" => __("Image-Size"),
	            "param_name" => "galleryitem_size",
				'value'       => array(
					'3x3'   => '3x3',
					'3x2'   => '3x2',
					'3x1'	=> '3x1',
					'2x3'   => '2x3',
					'2x2'   => '2x2',
					'2x1'	=> '2x1',
					'1x3'	=> '1x3',
					'1x2'   => '1x2',
					'1x1' => '1x1',
				),
	        ),
	        array(
	            "type" => "attach_image",
	            "holder" => 'img',
	            "class" => "",
	            "heading" => __("Image"),
	            "param_name" => "galleryitem_image",
	            "value" => "",
	        ),
	    )
	));
	
	if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
		class WPBakeryShortCode_gallerywrap extends WPBakeryShortCodesContainer {
				
		    protected function content($atts, $content = null) {
		        extract(shortcode_atts(array(), $atts));
		        $output = '<div class="q4-gallery"><div class="items">';
		        $output.= wpb_js_remove_wpautop($content);
				$output.= '</div></div>';
		     
		        return $output;
		    }
		}
	}
	if ( class_exists( 'WPBakeryShortCode' ) ) {
		class WPBakeryShortCode_galleryitem extends WPBakeryShortCode {
				
		    protected function content($atts, $content = null) {
		        extract(shortcode_atts(array(
		            'galleryitem_image' => false,
		            'galleryitem_size' => '3x3',
		        ), $atts));
		        
		        $item_image = wp_get_attachment_image_src($galleryitem_image, 'full');
		        $item_image_thumb = wp_get_attachment_image_src($galleryitem_image, 'large');

		        $output = '<div class="galleryitem galleryitemsize_'.$galleryitem_size.'">';
				$output.= '<a href="'.$item_image[0].'" data-lightbox="projectlightbox" class="lightboxlink" data-title="'.get_the_excerpt($galleryitem_image).'"><div class="img" style="background-image: url('.$item_image_thumb[0].')"></div></a>';
		        $output.= '</div>';
		        return $output;                
		    }
		}
	}