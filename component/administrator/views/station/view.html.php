<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewStation extends JViewLegacy {
    protected $item, $form;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        $this->addToolbar();

        parent::display($tpl);
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        $title = $isNew ? JText::_('COM_RAILWAY2_ADDING_STATION') : JText::_('COM_RAILWAY2_EDITION_STATION');

        JToolbarHelper::title($title, 'station');
        JToolBarHelper::apply('helloworld.apply', 'JTOOLBAR_APPLY');
        JToolBarHelper::save('helloworld.save');
        JToolBarHelper::cancel('helloworld.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}