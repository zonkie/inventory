<?php

class ItemsController extends AppController {
	
	var $name = 'Items';
	
	function HelloWorld() {
	
	}
	
	function ListItems(){
		$this->items = array(
			'name' => 'test',
			'description' => 'Dies ist ein Testobjekt',
			'location' => 1,
		);
	}
}