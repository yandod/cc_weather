<?php
	class HomeController extends CcWeatherAppController {
	public $uses = array('Issue');
	public function index() {
		$this->set('count',$this->Issue->find('count'));
	}
}

