<?php

class groupdocsDotNetAnnotation
{
    
    public static function handle_shortcode($arguments, $url, $parser, $shortcode)
    {
        $width = 600 ;
        $height = 800;


        if (isset($arguments['width']) && !empty($arguments['width'])) {
            $width = strip_tags(trim($arguments['width']));
        }

        if (isset($arguments['height']) && !empty($arguments['height'])) {
            $height = strip_tags(trim($arguments['height']));
        }
        if (isset($arguments['user_name']) && !empty($arguments['user_name'])) {
            $height = strip_tags(trim($arguments['user_name']));
        }

        $url = strip_tags(trim($url));

        $grpDotNetAnnotation = new groupdocsDotNetAnnotation_Result($width, $height, $url, $user_name);
        return $grpDotNetAnnotation->forTemplate();
    }
}
