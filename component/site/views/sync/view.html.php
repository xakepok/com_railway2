<?php defined('_JEXEC') or die;
class Railway2ViewSync extends JViewLegacy {
	public $items;

	public function display()
	{
		$model = Railway2ModelSync::getInstance('Sync', 'Railway2Model');

		$this->items = $model->sync();
		exit(var_dump($this->items));
		parent::display();
	}
}