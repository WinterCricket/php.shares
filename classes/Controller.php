<?php 

abstract class Controller{
	//properties
	protected $request;
	protected $action;
	//constructor
	public function __construct($action, $request){
		//assign properties
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		return $this->{$this->action}();
	}
	protected function returnView($viewmodel, $fullview){
		$view = 'views/'.get_class($this).'/'.$this->action. '.php';
		if($fullview){
			require('views/main.php'); 
		} else {
			require($view);
		}
	}
}

?>