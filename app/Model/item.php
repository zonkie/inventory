<?php

class Item extends AppModel {
	
	var $name = 'Item';
	
	function fetchList() {
		return array(
			'name'=>'test',
			'description'=>'Dies ist ein Testobjekt',
			'location'=>'1,
		);
	}
}
