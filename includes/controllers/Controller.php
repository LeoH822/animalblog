<?php
	
	class Controller{

		protected $view;
		protected $pageData = [];

		public  function CreateView(){
			$pageData = $this->pageData;

			if(file_exists("./includes/views/$this->view" . ".php")){
				require_once "./includes/views/$this->view" . ".php";
			}
		}
	} 

 ?>