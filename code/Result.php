<?php

class groupdocsDotNetAnnotation_Result extends ViewableData {
	protected $width = false;
	protected $height = false;    
	protected $server_url = false;
    protected $user_name = false;

	
	public function __construct($width, $height, $url, $user_name) {
		$this->width = $width;
		$this->height = $height;
		$this->server_url = $url;
        $this->user_name = $user_name;
		parent::__construct();
	}
	
	public function forTemplate() {
        return "<iframe src='{$this->server_url}?un={$this->user_name}&referer=silverstripe-net-annotation/1.0.0' frameborder='0' width='{$this->width}' height='{$this->height}'>
    If you can see this text, your browser does not support iframes. Please enable iframe support in your browser or use the latest version of any popular web browser such as Mozilla Firefox or Google Chrome. For more help, please check our documentation Wiki:
    http://groupdocs.com/docs/display/annotation/GroupDocs+Annotation+Integration+with+3rd+Party+Platforms</iframe>";

	}
	
}
