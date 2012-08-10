<?php
/**
 * @class  planetMobile
 * @author misol (misol221@paran.com)
 * @brief  Mobile class of planet module
 **/
require_once($this->module_path.'planet.view.php');
class planetMobile extends planetView {
	function init()
	{
		Context::set('is_planet_mobile',TRUE);
		$this->is_mobile = TRUE;
		planetView::init();
	}
}
?>