<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.view');

class Railway2ViewStation extends JViewLegacy {
    protected $item, $form, $script;

    public function display($tmp = null) {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');

        $this->addToolbar();

        parent::display($tpl);
        $this->setDocument();
    }

    protected function addToolbar() {
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        $title = $isNew ? JText::_('COM_RAILWAY2_ADDING_STATION') : JText::_('COM_RAILWAY2_EDITION_STATION').' '.$this->item->name;

        JToolbarHelper::title($title, 'station');
        JToolbarHelper::apply('station.apply', 'JTOOLBAR_APPLY');
        JToolbarHelper::save('station.save');
        JToolbarHelper::cancel('station.cancel', 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() {
        JHtml::_('jquery.framework');
        JHtml::_('bootstrap.framework');
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
    }
}