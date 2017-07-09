<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		if($this->request['controller'] == ""){
			$this->controller = 'home';
		} else {
			$this->controller = $this->request['controller'];
		}
		if($this->request['action'] == ""){
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];
		}
	}
	
	public function createController(){
		//check class
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			//check extend
			if(in_array("controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);

				} else {
					//Method doesn't exist
					echo '<h1>Method Does Not Exist</h1>';
					return;
				}

			} else {
				//base controller doesn't exist
				echo '<h1>Base Controller Not Found</h1>';
				return;
			}
		} else {
			//Controller Class Non-existant
			echo '<h1>Controller Class Non-existant</h1>';
		return;
	}
}


}
?>