<?php
defined('_JEXEC') or die;

class Railway2ModelMgt extends JModelList
{
	public function __construct(array $config = array())
	{
		$this->route = JFactory::getApplication()->input->getString('route', false);
		if ($this->route == '') $this->route = false;
		$this->vehicle = JFactory::getApplication()->input->getString('vehicle', false);
		if ($this->vehicle == '') $this->vehicle = false;
		if (mb_substr($this->vehicle, 0, 1) == '0') $this->vehicle = mb_substr($this->vehicle, 1);
		parent::__construct($config);
	}

	public function getItems()
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		if ($this->route === false && $this->vehicle === false)
		{
			$query->select('DISTINCT `vehicle`, `route`');
		}
		if ($this->route !== false && $this->vehicle === false)
		{
			$query->select('DISTINCT `vehicle`, `route`');
			$query->where("`route` = '{$this->route}'");
		}
		if ($this->route === false && $this->vehicle !== false)
		{
			$query->select('`vehicle`, `route`, `dat`');
			$query->where("`vehicle` = {$this->vehicle}");
		}

		$query->from('#__mgt_online');
		$query->order('`vehicle` ASC, `dat` DESC');
		$db->setQuery($query);

		return $db->loadAssocList();
	}

	private $route, $vehicle;
}