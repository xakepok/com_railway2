<?php
defined('_JEXEC') or die;
use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\MVC\Model\BaseDatabaseModel;

class Railway2Controller extends JControllerLegacy {

	public function display() {
		$input = JFactory::getApplication()->input;

		if (!empty($input->getString('apikey')))
        {
            $apikey = $input->getString('apikey');
            if ($apikey != '1') exit('bad');
        }

		if ($input->getString('view', null) == 'online')
		{
			$id = $input->getInt('id', 0);
			if ($id != 0)
			{
				$model = ListModel::getInstance('Online', 'Railway2Model', array());
				$yandex = BaseDatabaseModel::getInstance('Yandexrasp', 'Railway2Model', array());

				$items = $model->getItems();
				$item = $items[0]; //Коды станций

				$fromID = Railway2HelperCodes::getEsrById($item['fromID']);
				$toID = Railway2HelperCodes::getEsrById($item['toID']);
				$yandex->setFrom($fromID);
				$yandex->setTo($toID);
				$yandex->page = 1;

				$threads = $yandex->query();
				$result['schedule'] = $threads->segments;

				while (!empty($threads->segments))
				{
					$yandex->offset += 100;
					$threads = $yandex->query();
					$result['schedule'] = array_merge($result['schedule'], $threads->segments);
				}

				$threadID = false;

				foreach ($result['schedule'] as $thread)
				{
					$number = explode('/', $thread->thread->number);
					$number = $number[0];
					if ($number == $item['num'])
					{
						$threadID = $thread->thread->uid;
						break;
					}
				}

				if ($threadID !== false)
				{
					$url = JRoute::_('index.php?option=com_railway2&view=thread&id='.$threadID."&Itemid=246");
					JFactory::getApplication()->redirect($url);
				}
				else
				{
					jexit(JText::_('COM_RAILWAY2_ONLINE_ERROR').Railway2HelperCodes::dump($result));
				}
			}
		}
		parent::display();
	}
}
