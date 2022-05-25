<?php

  if ( ! class_exists('Wp_File_Ext_Check')) {
    class Wp_File_Ext_Check {
      public function __construct($file, $size) {

        $file_url            = wp_get_attachment_image_url($file);
        $file_type           = substr($file_url, strrpos($file_url, '.') + 1);
        $absolute_media_path = wp_get_original_image_path($file);
        
        if ($file_type == "svg") {
          echo file_get_contents($absolute_media_path);
        } else {
          echo wp_get_attachment_image($file, $size, array( "class" => "my-custom-class" ));
        }
      }
    }
  }

?>