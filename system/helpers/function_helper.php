<?php
if(!function_exists('name')){
	
	 function name($file='')
    {
		$name="Alvin";
		echo $name;
    }
}


//Dynamically add Javascript files to header page
if(!function_exists('add_js')){
    function add_js($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_js = $ci->config->item('header_js');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $header_js[] = $item;
            }
            $ci->config->set_item('header_js',$header_js);
        }else{
            $str = $file;
            $header_js[] = $str;
            $ci->config->set_item('header_js',$header_js);
        }
    }
}

//Dynamically add CSS files to header page
if(!function_exists('add_css')){
    function add_css($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $header_css[] = $item;
            }
            $ci->config->set_item('header_css',$header_css);
        }else{
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('header_css',$header_css);
        }
    }
}

if(!function_exists('add_plugin_css')){
    function add_plugin_css($file='')
    {
        $str = '';
        $ci = &get_instance();
        $plugin_css = $ci->config->item('plugin_css');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $plugin_css[] = $item;
            }
            $ci->config->set_item('plugin_css',$plugin_css);
        }else{
            $str = $file;
            $plugin_css[] = $str;
            $ci->config->set_item('plugin_css',$plugin_css);
        }
    }
}

if(!function_exists('add_plugin_js')){
    function add_plugin_js($file='')
    {
        $str = '';
        $ci = &get_instance();
        $plugin_js = $ci->config->item('plugin_js');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $plugin_js[] = $item;
            }
            $ci->config->set_item('plugin_js',$plugin_js);
        }else{
            $str = $file;
            $plugin_js[] = $str;
            $ci->config->set_item('plugin_js',$plugin_js);
        }
    }
}




//Putting our CSS and JS files together
if(!function_exists('put_headers')){
    function put_headers()
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');
        $header_js  = $ci->config->item('header_js');
		$plugin_css = $ci->config->item(('plugin_css'));
		$plugin_js = $ci->config->item(('plugin_js'));

		
        foreach($header_css AS $item){
            $str .= '<link rel="stylesheet" href="'.base_url().'assets/css/'.$item.'" type="text/css" />'."\n";
        }

        foreach($header_js AS $item){
            $str .= '<script type="text/javascript" src="'.base_url().'assets/js/'.$item.'"></script>'."\n";
        }

        return $str;
    }
}