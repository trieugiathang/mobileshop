<?php
class ProductViewSection extends View{
	var $button;
	var $layout;
	var $section;
	
	function display(){
		//$this->setLayout('default');
		$this->getLayout();
		$this->button = $this->buildSwitchLayoutButtons();
		
		$this->setLayout($this->layout);
		
		//set title , keyword, description
		$this->_siteDocument->setTitle($this->title);
	}
	
	function getLayout(){
		return $this->layout = addslashes(Request::get('layout','grid'));
	}
	
	function buildSwitchLayoutButtons(){
		$but1 = '<a class="grid" href="?option=com_product&view=default&section='.$this->sectionAlias.'&layout=grid">&nbsp;</a>';
		$but2 = '<a class="list" href="?option=com_product&view=default&section='.$this->sectionAlias.'&layout=list">&nbsp;</a>';
		return '<div class="switch_layout">'.$but1.$but2.'</div>';
	}
	
	
}