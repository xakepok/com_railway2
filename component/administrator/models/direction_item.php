<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class Railway2ModelDirection_item extends JModelAdmin {
    public function getTable($name = 'Rw2_directions_list', $prefix = 'Table', $options = array())
    {
        return JTable::getInstance($name, $prefix, $options);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            $this->option.'.direction_item', 'direction_item', array('control' => 'jform', 'load_data' => $loadData)
        );
        if (empty($form))
        {
            return false;
        }

	    $id = JFactory::getApplication()->input->get('id', 0);
	    $user = JFactory::getUser();

	    // Изменяем форму исходя из доступов пользователя.
	    if ($id != 0 && (!$user->authorise('core.edit.state', $this->option . '.message.' . (int) $id))
		    || ($id == 0 && !$user->authorise('core.edit.state', $this->option)))
	    {
		    // Модифицируем поля.
		    $form->setFieldAttribute('state', 'disabled', 'true');
	    }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState($this->option.'.edit.direction_item.data', array());
        if (empty($data))
        {
            $data = $this->getItem();
        }

        return $data;
    }

    public function getScript()
    {
        return 'administrator/components/' . $this->option . '/models/forms/synonym.js';
    }

	protected function canEditState($record)
	{
		$user = JFactory::getUser();

		if (!empty($record->id))
		{
			return $user->authorise('core.edit.state', $this->option . '.message.' . (int) $record->id);
		}
		elseif (!empty($record->catid))
		{
			return $user->authorise('core.edit.state', $this->option . '.category.' . (int) $record->catid);
		}
		else
		{
			return parent::canEditState($record);
		}
	}
}