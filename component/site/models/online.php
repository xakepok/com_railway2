<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\ListModel;

class Railway2ModelOnline extends ListModel {

	public static function getInstance($type = 'Online', $prefix = 'Railway2Model', $config = array())
	{
		return parent::getInstance($type, $prefix, $config); // TODO: Change the autogenerated stub
	}


	public function __construct(array $config)
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'`o`.`dir`',
				'`direction`',
				'`parity`'
			);
		}

		$this->id = JFactory::getApplication()->input->getInt('id', 0);

		parent::__construct($config);
	}

	public function getListQuery()
	{
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$where = $db->quoteName("dat")." = CURRENT_DATE()";

		$query
			->select("`o`.`dat` as `date`, `o`.`parity`, `o`.`id` as `onlineID`, `o`.`num`, `o`.`directionID`, `d`.`title` as `direction`, CONCAT(`from`.`popularName`,' - ',`to`.`popularName`) as `route`, `st`.`popularName` as `station`")
			->select("IF(`o`.`latence`>0,CONCAT('+',`o`.`latence`,' ".JText::_('COM_RAILWAY2_SYNC_BY_MIN')." ".JText::_('COM_RAILWAY2_ONLINE_BY_STATION')." "."',`st`.`popularName`),'".JText::_('COM_RAILWAY2_SYNC_BY_GRAPHIC')."') as `online`")
			->from($db->quoteName("#__rw2_online")." as ".$db->quoteName("o"))
			->leftJoin("#__rw2_directions_list as `d` ON `d`.`id` = `o`.`directionID`")
			->leftJoin("#__rw2_station_names as `from` ON `from`.`stationID` = `o`.`fromID`")
			->leftJoin("#__rw2_station_names as `to` ON `to`.`stationID` = `o`.`toID`")
			->leftJoin("#__rw2_station_names as `st` ON `st`.`stationID` = `o`.`station`")
			->where($where);

		$direction = $this->getState('filter.direction');
		$parity = $this->getState('filter.parity');
		if (is_numeric($direction)) {
			$search = $db->quote($direction);
			$query->where("`o`.`directionID` = {$search}");
		}
		if (is_numeric($parity)) {
			$parity = $db->quote($parity);
			$query->where("`o`.`parity` = {$parity}");
		}
		if ($this->id != 0)
		{
			$query->select('`o`.`fromID`, `o`.`toID`, `o`.`station` as `stationID`');
			$id = $db->quote($this->id);
			$query->where("`o`.`id` = {$id}");
		}

		return $query;
	}

	public function getItems()
	{
		$items = parent::getItems();
		$res = array();

		foreach ($items as $item)
		{
			$url = JRoute::_("index.php?option=com_railway2&id={$item->onlineID}");
			$link = JHtml::link($url, $item->route, array('class' => 'station-rasp-font', 'target' => '_blank'));
			$fromID = ($item->stationID != $item->toID) ? $item->stationID : $item->fromID;
			if ($this->id != 0)
			{
				$res[] = array(
					'num' => $item->num,
					'route' => $link,
					'fromID' => $fromID,
					'toID' => $item->toID,
					'date' => $item->date
				);
			}
			else
			{
				$res[] = array(
					'direction' => $item->direction,
					'num' => $item->num,
					'directionID' => $item->directionID,
					'route' => $link,
					'online' => $item->online,
					'parity' =>JText::_('COM_RAILWAY2_ONLINE_PARITY_'.$item->parity)
				);
			}
		}

		return $res;
	}

	protected function populateState($ordering = null, $direction = null)
	{
		$search = $this->getUserStateFromRequest($this->context . '.filter.direction', 'filter_direction');
		$parity = $this->getUserStateFromRequest($this->context . '.filter.parity', 'filter_parity');
		$this->setState('filter.direction', $search);
		$this->setState('filter.parity', $parity);
		parent::populateState('`o`.`dir`', 'asc');
	}

	protected function getStoreId($id = '')
	{
		$id .= ':' . $this->getState('filter.direction');
		$id .= ':' . $this->getState('filter.parity');
		return parent::getStoreId($id);
	}

	private $id;
}