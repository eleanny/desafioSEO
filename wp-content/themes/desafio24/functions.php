<?php
// Estilos CSS
  function dl_enqueue_style() {
  $theme_data = wp_get_theme();
/* Registrar estilos y bootstrap*/
   wp_register_style('style', get_parent_theme_file_uri('/style.css'), null, $theme_data->get( '1.0' ));
   wp_register_style('style', get_parent_theme_file_uri('/css/nivo-slider.css'), null, $theme_data->get( '1.0' ));
   wp_register_style('style', get_parent_theme_file_uri('/css/nivotheme.css'), null, $theme_data->get( '1.0' ));
   wp_register_style('style', get_parent_theme_file_uri('/css/prettyPhoto.css'), null, $theme_data->get( '1.0' ));
   wp_register_style('style', get_parent_theme_file_uri('http://fonts.googleapis.com/css?family=Lato:300,400,700,900'), null, $theme_data->get( '1.0' ));
   
  
/* llamar estilos */
   wp_enqueue_style( 'style' );
  }

  add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
  
   function dl_enqueue_scripts() { 
     $scripts = ['jquery-1.7.2','jquery.nivo.slider.pack', 'jquery.quicksand', 'jquery.prettyPhoto', 'jquery.easing.1.3', 'script', 'custom'];
        foreach($scripts as $script){
         wp_enqueue_script($script, get_template_directory_uri() .'/js/'.$script.'.js', null, '1.0.0', true);
         }
        
      }
  add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );

  add_theme_support('post-thumbnails');
  add_image_size('avatar',300,300,true);
  add_image_size('full',300,300,true);
  add_image_size('portafolio-thumbnails',220,180,true);
  add_image_size('portafolio-full',1000,1000,false);

?>