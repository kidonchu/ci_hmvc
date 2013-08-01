<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller
{
	public $_data = array(
		'title'     => 'no title',
		'module'    => 'template',
		'view_file' => 'index',
	);
	public $_layout = 'layouts/main';

	function render ()
	{
		// asset helper to load css and js
		$this->load->config('asset', TRUE);
		$this->load->config('template', TRUE);
		$this->load->helper('asset');

		$this->_data['css'] = $this->get_css();
		$this->_data['js']  = $this->get_js();

		$this->load->view($this->_layout, $this->_data);
	}

	/**
	 * Set the layout of the page
	 *
	 * @return object $this
	 */
	function layout ($layout)
	{
		$this->_layout = $layout;

		return $this;
	}

	/**
	 * Set the title of the page
	 *
	 * @return object $this
	 */
	function title ($title)
	{
		$this->_data['title'] = $title;

		return $this;
	}

	/**
	 * Set the module of the page
	 *
	 * @return object $this
	 */
	function module ($module)
	{
		$this->_data['module'] = $module;

		return $this;
	}

	/**
	 * Set the view_file of the page
	 *
	 * @return object $this
	 */
	function view_file ($view_file)
	{
		$this->_data['view_file'] = $view_file;

		return $this;
	}

	/**
	 * Set data using a chainable metod. Provide two strings or an array of data.
	 *
	 * @param string $name
	 * @param mixed $value
	 * @return object $this
	 */
	function set($name, $value = null)
	{
		// many items
		if (is_array($name) or is_object($name))
		{
			foreach ($name as $item => $value)
			{
				$this->_data[$item] = $value;
			}
		}

		// jsut one item
		else
		{
			$this->_data[$name] = $value;
		}

		return $this;
	}

	function get_css ()
	{
		return $this->config->item('css', 'template');
	}

	function get_js ()
	{
		return $this->config->item('js', 'template');
	}
}