<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Menu {

	private $menu = array();
	private $submenu = array();
	
	public function __construct()
	{	
		$this->ci =& get_instance();
	
		$this->ci->load->config('menu');
		$this->menu_open = $this->ci->config->item('menu_open');
		$this->menu_close = $this->ci->config->item('menu_close');
		$this->menu_icon_open = $this->ci->config->item('menu_icon_open');
		$this->menu_icon_close = $this->ci->config->item('menu_icon_close');
		$this->nav_link_open = $this->ci->config->item('nav_link_open');
		$this->nav_link_close = $this->ci->config->item('nav_link_close');
		$this->menu_dropdown_open = $this->ci->config->item('menu_dropdown_open');
		$this->menu_dropdown_close = $this->ci->config->item('menu_dropdown_close');
		log_message('debug', "Menu Class Initialized");
	}
	
	public function set_database($db_name)
    {
      $db_data = $this->ci->load->database($db_name, TRUE);
      $this->ci->db = $db_data;
    }


	function show()
	{
		if ($this->breadcrumbs) {
		
			// set output variable
			$output = $this->tag_open;
			
			// construct output
			foreach ($this->breadcrumbs as $key => $crumb) {
				$keys = array_keys($this->breadcrumbs);
				if (end($keys) == $key) {
					$output .= $this->crumb_last_open . '' . $crumb['page'] . '' . $this->crumb_close;
				} else {
					$output .= $this->crumb_open.'<a href="' . $crumb['href'] . '">' . $crumb['page'] . '</a> '.$this->crumb_divider.$this->crumb_close;
				}
			}
			
			// return output
			return $output . $this->tag_close . PHP_EOL;
		}
		
		// no crumbs
		return '';
	}
}
