<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class Railway2ModelSearch extends BaseDatabaseModel
{
	public $from, $to;

	public function __construct(array $config = array())
	{
		$input = JFactory::getApplication()->input;
		$this->from = (int) $input->getInt('from', 0);
		$this->to = (int) $input->getInt('to', 0);
		parent::__construct($config);
	}

	/* Расписание по станции */
	public function getItems()
	{
		$result = array();
		$arr = array();
		$return = array();
		$cnt = array('suburban' => 0, 'express' => 0); //Счётчик
		if ($this->from == 0 || $this->to == 0)
		{
			return false;
		}
		$modelRasp = JModelLegacy::getInstance('Yandexrasp', 'Railway2Model');
		$modelRasp->setFrom(Railway2HelperCodes::getEsrById($this->from));
		$modelRasp->setTo(Railway2HelperCodes::getEsrById($this->to));
		$modelRasp->page = 1;
		$tmp = $modelRasp->query();

		$result['schedule'] = $tmp->segments;
		$return['date'] = date("d.m.Y", strtotime($tmp->search->date));
		$return['from'] = (!empty($tmp->search->from->popular_title)) ? $tmp->search->from->popular_title : $tmp->search->from->title;
		$return['to'] = (!empty($tmp->search->to->popular_title)) ? $tmp->search->to->popular_title : $tmp->search->to->title;
		while (!empty($tmp->segments))
		{
			$modelRasp->offset += 100;
			$tmp = $modelRasp->query();
			$result['schedule'] = array_merge($result['schedule'], $tmp->segments);
		}

		foreach ($result['schedule'] as $thread)
		{
			$number = $thread->thread->number;
			$url = JRoute::_("index.php?option=com_railway2&view=thread&id={$thread->thread->uid}&Itemid=246");
			$color = (!empty($thread->thread->express_type)) ? 'express' : 'noexpress';
			$display = (strtotime(date("Y-m-d H:i:s")) > strtotime($thread->departure)) ? 'hidden-rasp' : 'show-rasp';
			$attribs = array("target" => "_blank", "class" => $color." search-link");
			$link = JHtml::link($url, $thread->thread->title, $attribs);
			$arrival = date("H.i", strtotime($thread->arrival));
			$dep = date("H.i", strtotime($thread->departure));
			$stops = $thread->stops;
			$type = $thread->thread->transport_subtype->title;
			$express = $thread->thread->express_type;
			$cnt[(!empty($express)) ? 'express' : 'suburban']++;
			$platform['dep'] = $thread->departure_platform;
			$platform['arr'] = $thread->arrival_platform;
			$price = $thread->tickets_info->places[0]->price->whole;
			if (!empty($thread->tickets_info->places[0]->price->cents)) $price .= ".".$thread->tickets_info->places[0]->price->cents;
			$price .= " ".JText::_('COM_RAILWAY2_RUB').".";
			$tickets = (!empty($thread->tickets_info)) ? $price : "";
			$arr[] = array(
				'number' => $number,
				'type' => $type,
				'express' => $express,
				'dep' => $dep,
				'arr' => $arrival,
				'stops' => $stops,
				'link' => $link,
				'platform' => $platform,
				'tickets' => $tickets,
				'display' => $display
			);
		}

		$return['schedule'] = $arr;
		$cnt['total'] = $cnt['suburban'] + $cnt['express'];
		$return['cnt'] = $cnt;

		return $return;
	}
}