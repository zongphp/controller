<?php
namespace zongphp\controller;
use zongphp\framework\build\Provider;

class ControllerProvider extends Provider {
	//延迟加载
	public $defer = true;

	public function boot() {

	}

	public function register() {
		$this->app->single( 'Controller', function () {
			return new Controller();
		} );
	}
}